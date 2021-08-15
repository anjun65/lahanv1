<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $peneliti = User::count();

        return view('pages.admin.dashboard', [
            'customer' => $peneliti,
        ]);
    }
}
