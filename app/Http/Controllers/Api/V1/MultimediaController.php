<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\MultimediaItem;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MultimediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = MultimediaItem::all();
        return $photos;
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
//
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
