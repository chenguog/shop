<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    //收货地址
    public function address()
    {
        return view('address');
    }
    //添加地址
    public function writeaddr()
    {
        return view('writeaddr');
    }
}
