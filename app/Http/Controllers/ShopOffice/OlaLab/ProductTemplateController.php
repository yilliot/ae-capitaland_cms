<?php

namespace App\Http\Controllers\ShopOffice\OlaLab;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shop;

class ProductTemplateController extends Controller
{
    function getList(Request $request)
    {
        return view('shop-office.ola-lab.product-template.list');
    }
    function getCreate(Request $request)
    {
        return view('shop-office.ola-lab.product-template.create');
    }
    function getEdit(Request $request)
    {
        return view('shop-office.ola-lab.product-template.edit');
    }

}
