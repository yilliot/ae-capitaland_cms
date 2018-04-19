<?php

namespace App\Http\Controllers\ShopOffice\OlaLab;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shop;

class CategoryController extends Controller
{
    function getList(Request $request)
    {
        return view('shop-office.ola-lab.category.list');
    }
    function getCreate(Request $request)
    {
        return view('shop-office.ola-lab.category.create');
    }
    function getEdit(Request $request)
    {
        return view('shop-office.ola-lab.category.edit');
    }
    function getDetails(Request $request)
    {
        return view('shop-office.ola-lab.category.details');
    }

}
