<?php

namespace Melon\Http\Controllers\Manage;

use Melon\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('manage.home.index');
    }
}
