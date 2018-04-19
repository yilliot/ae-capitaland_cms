<?php

namespace App\Http\Controllers\ShopOffice\OlaLab;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shop;

class ProductController extends Controller
{
    function getList(Request $request)
    {
        return view('shop-office.ola-lab.product.list');
    }
    function getCreate(Request $request)
    {
        return view('shop-office.ola-lab.product.create');
    }
    function getEdit(Request $request)
    {
        return view('shop-office.ola-lab.product.edit');
    }

}
