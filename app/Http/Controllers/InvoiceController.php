<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('invoice');
    }

    public function addInvoice()
    {
        return view('invoiceadd');
    }
}
