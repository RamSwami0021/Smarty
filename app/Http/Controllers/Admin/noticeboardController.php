<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\noticboard;
use Illuminate\Support\Str;

class noticeboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticeboards = noticboard::latest()->get();
        return view('admin/noticeboard/index',compact('noticeboards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/noticeboard/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $noticeboard = new noticboard();
        $noticeboard->title = $request->input('title');
        $noticeboard->status = $request->input('status');
        $noticeboard->popularity = $request->input('popularity');
        $noticeboard->description = $request->input('description');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $fileName, 'public');
            $noticeboard->file_path = $fileName;
        }
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('file/'), $imageName);
            $noticeboard->file_path = 'file/' . $imageName;
        }

        if ($noticeboard->save()) {
            return redirect()->back()->with('sweet', [
                'message' => 'Submit successfully',
                'title' => 'Success',
                'icon' => 'success',
            ]);
        } else {
            return redirect()->back()->with('sweet', [
                'type' => 'error',
                'title' => 'Error',
                'message' => 'Failed to submit the form. Please try again.',
            ]);
        }
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
