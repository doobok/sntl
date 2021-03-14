<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class MainpagesController extends Controller
{
    public function index()
    {
      $customers = Customer::where('active', 1)->orderBy('order', 'desc')->get();

      return view('main.pages.index', [
        'customers' => $customers
      ]);
    }
}
