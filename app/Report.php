<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Page;
use App\Order;
use App\Visiter;
use Carbon\Carbon;

class Report extends Model
{
    public static function calculateCr()
    {
        $pages = Page::all();
        foreach ($pages as $page) {
            $id = $page->id;

            $yesterday = Carbon::yesterday();
            $today = Carbon::today();
            $week = Carbon::now()->subWeek();

            // Count visitors
            $yesterday_visit = Visiter::where('page_id', $id)->whereBetween('created_at', [$yesterday, $today])->count();
            $today_visit = Visiter::where('page_id', $id)->where('created_at', '>=', $today)->count();
            $week_visit = Visiter::where('page_id', $id)->where('created_at', '>=', $week)->count();

            // Count orders
            $yesterday_order = Order::where('page_id', $id)->whereBetween('created_at', [$yesterday, $today])->count();
            $today_order = Order::where('page_id', $id)->where('created_at', '>=', $today)->count();
            $week_order = Order:: where('page_id', $id)->where('created_at', '>=', $week)->count();

            //Calculate Cr
            $yesterday_cr = ($yesterday_visit !== 0) ? $yesterday_order / $yesterday_visit : 0;
            $today_cr = ($today_visit !== 0) ? $today_order / $today_visit : 0;
            $week_cr = ($week_visit !== 0) ? $week_order / $week_visit : 0;

            $yesterday_cr = round($yesterday_cr, 2);
            $today_cr = round($today_cr, 2);
            $week_cr = round($week_cr, 2);

            // Write Cr to db
            $pageUp = Page::find($id);
            $pageUp->yesterday_cr =  $yesterday_cr;
            $pageUp->today_cr = $today_cr;
            $pageUp->week_cr = $week_cr;
            $pageUp->save();
        }
    }
}
