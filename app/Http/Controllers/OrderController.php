<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:64',
            'phone' => 'required|numeric',
        ]);

        $pageId = $this->fetchPageNumber($request);

        $order = new Order();
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->page_id = $pageId;

        if ($order->save()) {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Order was successfully added!');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Error!');
        }

        return redirect('/page/'.$pageId);
    }

    /**
     * Fetch page number from http_refer
     * Example: http_refer http://localhost:8000/page/3
     * page number = 3
     * @param Request $request
     * @return int $pageNumber
     */
    private function fetchPageNumber(Request $request)
    {
        $ref = $request->server('HTTP_REFERER');
        $array = explode('/', $ref);
        $pageNumber = (integer)$array[count($array) - 1];
        return $pageNumber;
    }
}
