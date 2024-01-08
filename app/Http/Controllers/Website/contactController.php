<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Website/contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->first_name = $request->input('First_Name');
        $contact->last_name = $request->input('Last_Name');
        $contact->email = $request->input('Email');
        $contact->contact_cf2 = $request->input('CONTACTCF2');
        $contact->phone = $request->input('Phone');
        $contact->title = $request->input('Title');
        $contact->description = $request->input('Description');

        if ($contact->save()) {
            return redirect()->back()->with('sweet', [
                'message' => 'Contact submit successfully',
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
