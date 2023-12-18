<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = DB::table('albums')->get();
        return view('pages.galleryapp.index', [
            'albums' => $albums,
        ]);
    }

    public function albumcreate()
    {
        return view('pages.galleryapp.create');
    }

    public function create_store(Request $request)
    {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'image' . md5(uniqid()) . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/gallery/albums'), $imageName);

            DB::table('albums')->insert([
                'name' => $request->name,
                'description' => $request->description,
                'cover_image' => 'assets/gallery/albums/' . $imageName,

            ]);
            return redirect()->back()->with('success', 'photo created successfully done !');



        }

    }

    public function show($id)
    {
        $photo_id = DB::table('albums')
            ->where('id', $id)
            ->first();

        $allAlbum = DB::table('albums')
            ->leftJoin('photos', 'albums.id', '=', 'photos.album_id')
            ->where('albums.id', $id)
            ->get();
        return view('pages.galleryapp.show', [
            'photo_id' => $photo_id,
            'allAlbum' => $allAlbum,
        ]);
    }

    public function delete_image($id)
    {
        $album = DB::table('albums')
            ->where('id', $id)
            ->first();
        $removeFile = unlink(public_path($album->cover_image));
        if ($removeFile) {
            $photos = DB::table('photos')
                ->where('album_id', $id)
                ->get();

            foreach ($photos as $photo) {
                unlink(public_path($photo->photo));
            }

            DB::table('albums')
                ->where('id', $id)
                ->delete();
        }
        return redirect()->back()->with('success', 'albums deleted successfullu done !');
    }
}