<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthMhsController extends Controller
{
    public function login_mhs()
    {
       return view('backend.Dash-Mhs.Auth-Mhs.login-mhs');
    }
}