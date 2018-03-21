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
        //Add page number to pages table
        $page = Page::find($id);
        if (!$page) {
            $page = new Page;
            $page->id = $id;
            $page->save();
        };

        //Add visitor to db
        $visitor = new Visiter();
        $visitor->user_agent = $request->server('HTTP_USER_AGENT');
        $visitor->remote_adr = $request->server('REMOTE_ADDR');
        $visitor->http_referer = $request->server('HTTP_REFERER');
        $visitor->page_id = $id;
        $visitor->save();

        //Add count yesterday, today and week of views pages to db


        return view('order_form', ['id' => $id]);
    }


}
