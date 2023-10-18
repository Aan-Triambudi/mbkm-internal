<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthPLController extends Controller
{
    public function login_pl()
    {
       return view('backend.Dash-PL.Auth-PL.login-pl');
    }
}