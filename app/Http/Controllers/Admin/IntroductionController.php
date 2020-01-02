<?php

namespace App\Http\Controllers\Admin;

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
        $introduction = Introduction::all();
        return view('admin/introduction',compact('introduction'));
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
        Introduction::create($request->all());
        return redirect()->route('introduction')->with('success','bạn đã thêm thành công');
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
    public function edit(Introduction $introduction,$id)
    {
        $introduction = Introduction::all();
        $model = Introduction::find($id);
        return view('admin/introduction_edit',compact('introduction','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if($request->hasFile('upload_image')){
            $image = $request->file('upload_image');
            $name_image = rand(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('image'), $name_image);
            $request->merge(['img'=>$name_image]);
            Introduction::where('id',$id)->update([
                 'title' => $request->input('title'),
                 'content' => $request->input('content'),
                 'img' => $request->input('img')
            ]);
        }
        Introduction::where('id',$id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);
        return redirect()->route('introduction')->with('warning','Bạn đã chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function delete(Introduction $introduction,$id)
    {
        Introduction::where('id',$id)->delete();
        return redirect()->route('introduction')->with('danger','bạn đã xóa thành công');
    }
}
