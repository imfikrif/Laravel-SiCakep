<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterEmployeeController extends Controller
{
    public function index()
    {
        return view('master-employee.index');
    }
}
