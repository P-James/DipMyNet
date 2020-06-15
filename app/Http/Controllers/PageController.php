<?php

namespace App\Http\Controllers;

use App\Fishery;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $fisheries = Fishery::all();
        
        return view('home', compact('fisheries'));
    }
}
