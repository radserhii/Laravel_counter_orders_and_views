<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visiter;
use App\Page;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index($id, Request $request)
    {
        //Add visitor to db
        $visitor = new Visiter();
        $visitor->user_agent = $request->server('HTTP_USER_AGENT');
        $visitor->remote_adr = $request->server('REMOTE_ADDR');
        $visitor->http_referer = $request->server('HTTP_REFERER');
        $visitor->page_id = $id;
        $visitor->save();

        //Add count yesterday, today and week of views pages to db
        $yesterday = Carbon::yesterday();
        $today = Carbon::today();
        $week = Carbon::now()->subWeek();

        $yesterday_cr = Visiter::where('page_id', $id)->whereBetween('created_at', [$yesterday, $today])->count();
        $today_cr = Visiter::where('page_id', $id)->where('created_at', '>=', $today)->count();
        $week_cr = Visiter::where('page_id', $id)->where('created_at', '>=', $week)->count();

        $page = Page::find($id);

        if(!$page) {
            $page = new Page;
            $page->id = $id;
        };

        $page->yesterday_cr = $yesterday_cr;
        $page->today_cr = $today_cr;
        $page->week_cr = $week_cr;
        $page->save();

        return view('order_form', ['id' => $id]);
    }


}
