<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientHomeController extends Controller
{
    public function index()
    {

        return view('clients.home');
    }

    public function shop()
    {
        return view('clients.shop');
    }

    public function detail()
    {
        return view('clients.detail');
    }

    public function shopcard()
    {
        return view('clients.shopcard');
    }

    public function checkout()
    {
        return view('clients.checkout');
    }
}