<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('pages.home');
    }


    // single image upload start
    public function singleimge()
    {
        return view('pages.images.singleimge');
    }

    public function singleimageupload(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $images = $request->file('image');
            $fileName = 'photo-' . md5(uniqid()) . '_' . time() . '.' . $images->getClientOriginalExtension();

            $images->move(public_path('images'), $fileName);

        }
        return redirect()->back();
    }

    // single image upload end

    // multiple image upload start
    public function multipleimge()
    {
        return view('pages.images.multipleimge');
    }

    public function multipleimageupload(Request $request)
    {
        $this->validate($request, [
            'images' => 'required',
            'images.*' => 'image|required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {
                $fileName = 'multiple-photo-' . md5(uniqid()) . '_' . time() . '.' . $image->getClientOriginalExtension();

                $image->move(public_path('images'), $fileName);

            }

        }
        return redirect()->back();

    }
    // multiple image upload end
}