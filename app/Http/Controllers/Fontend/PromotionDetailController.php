<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Model\Promotion_detail;
use App\Model\Article;
use Illuminate\Http\Request;
use App\Model\Address;
use App\Model\Images_cs2;
class PromotionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $address_view = Address::all();
        $promotion_detail_view = Promotion_detail::where('id',$id)->get();
        $article_view = Article::all();
        $images_cs2_view = Images_cs2::all();
        return view('fontend/promotion_detail_view',compact('address_view','promotion_detail_view','article_view','images_cs2_view'));
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
     * @param  \App\Model\Promotion_detail  $promotion_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion_detail $promotion_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Promotion_detail  $promotion_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion_detail $promotion_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Promotion_detail  $promotion_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promotion_detail $promotion_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Promotion_detail  $promotion_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion_detail $promotion_detail)
    {
        //
    }
}
