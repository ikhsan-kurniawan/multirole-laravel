<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        return view('superadmin', [
            'title' => 'Super Admin',
            'header' => 'Super Admin',
        ]);
    }
}
