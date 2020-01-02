<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin/news',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->hasFile('upload_image')){
            $image = $request->file('upload_image');
            $name_image = rand(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('image'), $name_image);
            $request->merge(['img'=>$name_image]);
        }
        News::create($request->all());
        return redirect()->route('news')->with('success','Bạn đã thêm mới thành công');
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
     * @param  \App\Model\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news,$id)
    {
        $news = News::all();
        $model = News::find($id);
        return view('admin/news_edit',compact('news','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if($request->hasFile('upload_image')){
            $image = $request->file('upload_image');
            $name_image = rand(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('image'), $name_image);
            $request->merge(['img'=>$name_image]);
            News::where('id',$id)->update([
               'img' => $request->input('img'),
               'day' => $request->input('day'),
               'content' => $request->input('content'),
               'title' => $request->input('title')
            ]);
        }
        News::where('id',$id)->update([
            'day' => $request->input('day'),
            'content' => $request->input('content'),
            'title' => $request->input('title')
        ]);
        return redirect()->route('news')->with('warning','Bạn đã chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\News  $news
     * @return \Illuminate\Http\Response
     */
    public function delete(News $news,$id)
    {
       News::where('id',$id)->delete();
       return redirect()->route('news')->with('danger','Bạn đã xóa thành công'); 
    }
}
