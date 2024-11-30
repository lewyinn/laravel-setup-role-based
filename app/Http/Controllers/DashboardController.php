<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userRole = auth()->user()->role; // Ambil role user yang sedang login

        return view('dashboard', compact('userRole'));
    }
}
