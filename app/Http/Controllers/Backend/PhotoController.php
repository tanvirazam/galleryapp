<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
{
    public function index()
    {

        return view('pages.galleryapp.photos.create');
    }

    public function photo_store(Request $request)
    {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'image' . md5(uniqid()) . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/gallery/photos'), $imageName);
        }

        DB::table('photos')->insert([
            'title' => $request->name,
            'photo_description' => $request->description,
            'photo' => 'assets/gallery/photos/' . $imageName,
            'album_id' => $request->album_id,
        ]);
        return redirect()->back()->with('success', 'photo uploaded successfully !');
    }
}