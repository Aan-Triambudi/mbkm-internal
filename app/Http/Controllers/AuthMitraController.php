<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthMitraController extends Controller
{
    public function login_mitra()
    {
       return view('backend.Dash-Mitra.Auth-Mitra.login-mitra');
    }
}