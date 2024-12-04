<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminstoreController extends Controller
{
    public function index(){
        return view('admin.store.index');
    }
}
