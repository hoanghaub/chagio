<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Article_detail;
use Illuminate\Http\Request;

class ArticleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article_detail = Article_detail::all();
        return view('admin/article_detail',compact('article_detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->hasFile('upload_image')){
            $image =  $request->file('upload_image');
            $name_image = rand(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('image'), $name_image);
            $request->merge(['img'=>$name_image]);
        }
        Article_detail::create($request->all());
        return redirect()->route('article_detail')->with('success','bạn đã thêm mới thành công');
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
    public function edit($id)
    {
        $article_detail = Article_detail::all();
        $model = Article_detail::find($id);
        return view('admin/article_detail_edit',compact('article_detail','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Article_detail  $article_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if($request->hasFile('upload_image')){
            $image = $request->file('upload_image');
            $name_image = rand(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('image'), $name_image);
            $request->merge(['img'=>$name_image]);
            Article_detail::where('id',$id)->update([
               'name' => $request->input('name'),
               'day' => $request->input('day'),
               'content' => $request->input('content'),
               'img' => $request->input('img')
            ]);
        }
        Article_detail::where('id',$id)->update([
               'name' => $request->input('name'),
               'day' => $request->input('day'),
               'content' => $request->input('content')
        ]);
        return redirect()->route('article_detail')->with('warning','bạn đã chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Article_detail  $article_detail
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    { 
       Article_detail::where('id',$id)->delete();
       return redirect()->route('article_detail')->with('danger','bạn đã xóa thành công');
    }
}
