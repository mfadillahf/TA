<?php

namespace App\Http\Controllers\Kepengurusan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kepengurusanController extends Controller
{
        public function index()
    {
        return view('Kepengurusan.kepengurusan');
    }
}
