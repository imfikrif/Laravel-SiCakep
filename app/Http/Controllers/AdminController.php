<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $breadcumb['main']  = "Dashboard";
        $breadcumb['sub']   = "Dashboard";

        return view('dashboard.index', $breadcumb);
    }
}
