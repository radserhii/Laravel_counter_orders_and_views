<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class ReportController extends Controller
{
    public function show()
    {
        $pages = Page::all();
        return view('report', ['pages' => $pages]);
    }
}
