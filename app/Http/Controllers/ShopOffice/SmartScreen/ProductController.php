<?php

namespace App\Http\Controllers\ShopOffice\SmartScreen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shop;

class ProductController extends Controller
{
    function getList(Request $request)
    {
        return view('shop-office.smart-screen.product.list');
    }
    function getCreate(Request $request)
    {
        return view('shop-office.smart-screen.product.create');
    }
    function getEdit(Request $request)
    {
        return view('shop-office.smart-screen.product.edit');
    }

}
