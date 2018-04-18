<?php

namespace App\Http\Controllers\ShopOffice\SmartScreen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shop;

class ScreenSaverController extends Controller
{
    function getEdit(Request $request)
    {
        return view('shop-office.smart-screen.screen-saver.edit');
    }
    function postEdit(Request $request)
    {
        if ($request->action === 'delete') {
            \DB::table('area_categories')
                ->where('category_id', $request->id)
                ->delete();
            Category::where('id', $request->id)
                ->delete();
        } else {
            $category = Category::find($request->id);
            $category->name = $request->name;
            $category->save();
        }

        return back()->with('success', 'Success');
    }
}
