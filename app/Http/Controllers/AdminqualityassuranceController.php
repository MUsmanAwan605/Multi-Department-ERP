<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminqualityassuranceController extends Controller
{
    public function index(){
        return view('admin.qualityassurance.index');
    }
}
