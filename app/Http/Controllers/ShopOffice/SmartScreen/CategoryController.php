<?php

namespace App\Http\Controllers\ShopOffice\SmartScreen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shop;

class CategoryController extends Controller
{
    function getList(Request $request)
    {
        return view('shop-office.smart-screen.category.list');
    }
    function getCreate(Request $request)
    {
        return view('shop-office.smart-screen.category.create');
    }
    function getEdit(Request $request)
    {
        return view('shop-office.smart-screen.category.edit');
    }
    function getDetails(Request $request)
    {
        return view('shop-office.smart-screen.category.details');
    }

}
