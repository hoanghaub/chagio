<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Model\News_detail;
use Illuminate\Http\Request;
use App\Model\Address;
use App\Model\News;
use App\Model\Article;
class NewsDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address_view = Address::all();
        $news_detail_view = News_detail::all();
        $news_view = News::all();
        $article_view = Article::all();
        return view('fontend/news_detail_view',compact('news_detail_view','address_view','news_view','article_view'));
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
     * @param  \App\Model\News_detail  $news_detail
     * @return \Illuminate\Http\Response
     */
    public function show(News_detail $news_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\News_detail  $news_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(News_detail $news_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\News_detail  $news_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News_detail $news_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\News_detail  $news_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(News_detail $news_detail)
    {
        //
    }
}
