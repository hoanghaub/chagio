<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\News_detail;
use Illuminate\Http\Request;

class NewsDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_detail = News_detail::all();
        return view('admin/news_detail',compact('news_detail'));
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
        News_detail::create($request->all());
        return redirect()->route('news_detail')->with('success','Bạn đã thêm mới thành công');
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
    public function edit(News_detail $news_detail,$id)
    {
        $news_detail = News_detail::all();
        $model = News_detail::find($id);
        return view('admin/news_detail_edit',compact('news_detail','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\News_detail  $news_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if($request->hasFile('upload_image')){
            $image = $request->file('upload_image');
            $name_image = rand(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('image'), $name_image);
            $request->merge(['img'=>$name_image]);
            News_detail::where('id',$id)->update([
                'name' => $request->input('name'),
                'img' => $request->input('img'),
                'content' => $request->input('content'),
                'day' => $request->input('day')
            ]);
        }
        News_detail::where('id',$id)->update([
            'name' => $request->input('name'),
            'content' => $request->input('content'),
            'day' => $request->input('day')
        ]);
        return redirect()->route('news_detail')->with('warning','Bạn đã chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\News_detail  $news_detail
     * @return \Illuminate\Http\Response
     */
    public function delete(News_detail $news_detail,$id)
    {
        News_detail::where('id',$id)->delete();
        return redirect()->route('news_detail')->with('danger','bạn đã xóa thành công');
    }
}
