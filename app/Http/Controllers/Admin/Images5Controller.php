<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Images_cs5;
use Illuminate\Http\Request;

class Images5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $images_cs5 = Images_cs5::all();
        return view('admin/images_cs5',compact('images_cs5'));
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
        Images_cs5::create($request->all());
        return redirect()->route('images_cs5')->with('success','bạn đã thêm mới thành công');
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
     * @param  \App\Model\Images_cs5  $images_cs5
     * @return \Illuminate\Http\Response
     */
    public function show(Images_cs5 $images_cs5)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Images_cs5  $images_cs5
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $images_cs5 = Images_cs5::all();
        $model = Images_cs5::find($id);
        return view('admin/images_cs5_edit',compact('images_cs5','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Images_cs5  $images_cs5
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if($request->hasFile('upload_image')){
            $image = $request->file('upload_image');
            $name_image = rand(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('image'), $name_image);
            $request->merge(['img'=>$name_image]);
            Images_cs5::where('id',$id)->update([
                'name' => $request->input('name'),
                'img' => $request->input('img')
            ]);
        }
        Images_cs5::where('id',$id)->update([
            'name' => $request->input('name')
        ]);
        return redirect()->route('images_cs5')->with('warning','bạn đã chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Images_cs5  $images_cs5
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Images_cs5::where('id',$id)->delete();
        return redirect()->route('images_cs5')->with('danger','bạn đã xóa thành công');
    }
}
