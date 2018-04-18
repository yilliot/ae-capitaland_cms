<?php

namespace App\Http\Controllers\ShopOffice\SmartScreen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shop;

class PhotoController extends Controller
{
    function getList(Request $request)
    {
        return view('shop-office.smart-screen.photo.list');
    }
    function getCreate(Request $request)
    {
        return view('shop-office.smart-screen.photo.create');
    }
    function getEdit(Request $request)
    {
        return view('shop-office.smart-screen.photo.edit');
    }

}
