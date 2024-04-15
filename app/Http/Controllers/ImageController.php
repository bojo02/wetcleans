<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::orderBy('created_at','desc')->paginate(10);

        return view('admin.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        foreach($request->file('images') as $image){
            Storage::put('/public/images/gallery/', $image);

            Image::create([
                'src' => '/storage/images/gallery/' . $image->hashName(),

            ]);
        }
       

        return redirect()->route('admin.gallery.index')->with('success', 'Снимките бяха добавени в галерията!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Image $image)
    {
        $image->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Снимката беше изтрита успешно!');
    }
}
