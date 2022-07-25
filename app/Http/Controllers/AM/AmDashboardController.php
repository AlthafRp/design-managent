<?php

namespace App\Http\Controllers\AM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AmDashboardController extends Controller
{
    public function index()
    {
        return view('AM/dashboard');
    }
}
