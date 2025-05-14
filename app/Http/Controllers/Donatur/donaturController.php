<?php

namespace App\Http\Controllers\Donatur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class donaturController extends Controller
{
        public function index()
    {
        return view('Donatur.donatur');
    }
}
