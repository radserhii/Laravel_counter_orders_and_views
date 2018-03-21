<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['page_number', 'yesterday_cr', 'today_cr', 'week_cr'];
    public $incrementing = false;
}
