<?php

namespace App\Http\Controllers\Vender;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VenderController extends Controller
{
    public function index()
    {
        return view('vender.dashboard');
    }
}
