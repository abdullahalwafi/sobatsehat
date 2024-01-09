<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
        //menampilkan dashboard
        public function dashboard() {
            return view('dashboard');
        }
}
