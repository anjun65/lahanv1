<?php

namespace App\Http\Controllers\vp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $peneliti = User::count();

        return view('pages.vp.dashboard', [
            'customer' => $peneliti,
        ]);
    }
}
