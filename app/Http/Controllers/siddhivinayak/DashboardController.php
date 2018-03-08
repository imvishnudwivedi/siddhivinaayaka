<?php

namespace App\Http\Controllers\siddhivinayak;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('siddhivinayak.dashboard.index');
    }
}
