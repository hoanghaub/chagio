<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Images_customer;
use Illuminate\Http\Request;

class ImagesCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Images_customer::get(), 200);
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
     * @param  \App\Model\Images_customer  $images_customer
     * @return \Illuminate\Http\Response
     */
    public function show(Images_customer $images_customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Images_customer  $images_customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Images_customer $images_customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Images_customer  $images_customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Images_customer $images_customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Images_customer  $images_customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Images_customer $images_customer)
    {
        //
    }
}
