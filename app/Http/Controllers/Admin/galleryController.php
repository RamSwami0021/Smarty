<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gallery;
use Illuminate\Support\Str;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = gallery::latest()->get();
        return view('admin/gallery/index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/gallery/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gallery = new gallery();
        $gallery->image_type = $request->input('image_type');
        $gallery->is_active = $request->has('is_active');

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);
            $gallery->image_path = 'images/' . $imageName;
        }

        $gallery->save();


        return redirect()->back()->with('sweet', [
            'message' => 'Submit successfully',
            'title' => 'Success',
            'icon' => 'success',
        ]);
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
    public function destroy(string $id)
    {
        //
    }
}
