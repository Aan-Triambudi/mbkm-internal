<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthDPLController extends Controller
{
    public function login_dpl()
    {
       return view('backend.Dash-DPL.Auth-DPL.login-dpl');
    }
}