<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Images_cs4;
use Illuminate\Http\Request;

class Images4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images_cs4 = Images_cs4::all();
        return view('admin/images_cs4',compact('images_cs4'));
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
        Images_cs4::create($request->all());
        return redirect()->route('images_cs4')->with('success','bạn đã thêm mới thành công');
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
     * @param  \App\Model\Images_cs4  $images_cs4
     * @return \Illuminate\Http\Response
     */
    public function show(Images_cs4 $images_cs4)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Images_cs4  $images_cs4
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $images_cs4 = Images_cs4::all();
        $model = Images_cs4::find($id);
        return view('admin/images_cs4_edit',compact('images_cs4','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Images_cs4  $images_cs4
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if($request->hasFile('upload_image')){
            $image = $request->file('upload_image');
            $name_image = rand(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('image'), $name_image);
            $request->merge(['img'=>$name_image]);
            Images_cs4::where('id',$id)->update([
               'name' => $request->input('name'),
               'img' => $request->input('img')
            ]);
        }
        Images_cs4::where('id',$id)->update([
            'name' => $request->input('name')
        ]);
        return redirect()->route('images_cs4')->with('warning','bạn đã chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Images_cs4  $images_cs4
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Images_cs4::where('id',$id)->delete();
        return redirect()->route('images_cs4')->with('danger','bạn đã xóa thành công');
    }
}
