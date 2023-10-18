<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthKaprodiController extends Controller
{
    public function login_kaprodi()
    {
       return view('backend.Dash-Kaprodi.Auth-Kaprodi.login-kaprodi');
    }
}