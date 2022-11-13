<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaskapaiController extends Controller
{
    public function index()
    {
        return view('maskapai');
    }

    public function addMaskapai()
    {
        return view('maskapaiadd');
    }
}
