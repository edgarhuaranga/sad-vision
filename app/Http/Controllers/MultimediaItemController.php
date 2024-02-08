<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\MultimediaItem;
use Illuminate\Http\Request;

class MultimediaItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = MultimediaItem::orderBy('id', 'desc')->take(20)->get();
        return view('panel', compact('photos'));
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
        $cover = $request->file('photo');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $item = new MultimediaItem();
        $item->mime = $cover->getClientMimeType();
        $item->original_filename = $cover->getClientOriginalName();
        $item->filename = $cover->getFilename().'.'.$extension;
        $item->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(MultimediaItem $multimediaItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MultimediaItem $multimediaItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MultimediaItem $multimediaItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MultimediaItem $multimediaItem)
    {
        //
    }
}
