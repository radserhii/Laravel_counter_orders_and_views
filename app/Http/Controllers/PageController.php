<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visiter;

class PageController extends Controller
{
    public function index($id, Request $request)
    {
        $visitor = new Visiter();
        $visitor->user_agent = $request->server('HTTP_USER_AGENT');
        $visitor->remote_adr = $request->server('REMOTE_ADDR');
        $visitor->http_referer = $request->server('HTTP_REFERER');
        $visitor->page_id = $id;
        $visitor->save();

        return view('order_form', ['id' => $id]);
    }


}
