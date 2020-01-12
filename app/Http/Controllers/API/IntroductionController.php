<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Introduction;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Introduction::get(), 200);
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
     * @param  \App\Model\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function show(Introduction $introduction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function edit(Introduction $introduction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Introduction $introduction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Introduction $introduction)
    {
        //
    }
}
