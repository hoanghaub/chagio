<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Model\Article_detail;
use App\Model\Address;
use Illuminate\Http\Request;
use App\Model\Article;
class ArticleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $address_view = Address::all();
        $article_detail_view = Article_detail::where('id',$id)->get();
        $article_view = Article::all();
        return view('fontend/article_detail_view',compact('address_view','article_detail_view','article_view'));
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
     * @param  \App\Model\Article_detail  $article_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Article_detail $article_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Article_detail  $article_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Article_detail $article_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Article_detail  $article_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article_detail $article_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Article_detail  $article_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article_detail $article_detail)
    {
        //
    }
}
