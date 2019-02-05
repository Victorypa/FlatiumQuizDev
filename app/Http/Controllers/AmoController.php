<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Amo\Auth\Login;

class AmoController extends Controller
{
    public function index()
    {
        Login::login();
    }
}
