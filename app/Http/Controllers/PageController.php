<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($id) {
        return view('order_form', ['id' => $id]);
    }
}
