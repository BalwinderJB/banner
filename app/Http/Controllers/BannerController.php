<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class BannerController extends Controller
{
    public function index()
    {
//        dd('utgug');
        return view('layouts.banner');
    }

    public function get()
    {
        return redirect()->route('banner');
    }
}
