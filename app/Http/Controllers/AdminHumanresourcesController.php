<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHumanresourcesController extends Controller
{
    public function index(){
        return view('admin.humanresources.index');
    }
}
