<?php

namespace App\Http\Controllers;

use App\Fishery;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {        
        return view('home');
    }
}
