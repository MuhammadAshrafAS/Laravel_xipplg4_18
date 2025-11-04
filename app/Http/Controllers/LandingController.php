<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() //nama function = index
    {
        return view('login'); // nama file landing.blade.php
    }
}
