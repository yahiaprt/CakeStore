<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminDashboardController extends Controller
{
    public function indexadminReal()
    {
        return view('layouts.adminReal');
    }
    public function index()
    {
        return view('layouts.admin');
    }
}
