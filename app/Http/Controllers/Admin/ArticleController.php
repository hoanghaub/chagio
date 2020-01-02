<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('admin/article',compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Article::create($request->all());
        return redirect()->route('article')->with('success','bạn đã thêm mới thành công');
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
     * @param  \App\Model\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::all();
        $model = Article::find($id);
        return view('admin/article_edit',compact('article','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Article::where('id',$id)->update([
            'name' => $request->input('name')
        ]);
        return redirect()->route('article')->with('warning','bạn đã chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Article::where('id',$id)->delete();
        return redirect()->route('article')->with('danger','bạn đã xóa thành công');
    }
}
