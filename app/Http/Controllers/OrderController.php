<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function ordersend()
    {
        return view('order-send');
    }

    public function ordersupply()
    {
        return view('order-supplyment');
    }


}
