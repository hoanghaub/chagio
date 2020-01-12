<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Images_cs5;
use Illuminate\Http\Request;

class ImagesCs5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Images_cs5::get(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Images_cs5  $images_cs5
     * @return \Illuminate\Http\Response
     */
    public function show(Images_cs5 $images_cs5)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Images_cs5  $images_cs5
     * @return \Illuminate\Http\Response
     */
    public function edit(Images_cs5 $images_cs5)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Images_cs5  $images_cs5
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Images_cs5 $images_cs5)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Images_cs5  $images_cs5
     * @return \Illuminate\Http\Response
     */
    public function destroy(Images_cs5 $images_cs5)
    {
        //
    }
}
