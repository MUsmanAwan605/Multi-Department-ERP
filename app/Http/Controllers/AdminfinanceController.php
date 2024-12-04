<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminfinanceController extends Controller
{
    public function index(){
        return view('admin.finance.index');
    }
}
