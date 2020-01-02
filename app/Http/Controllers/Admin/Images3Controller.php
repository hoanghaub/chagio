<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Images_cs3;
use Illuminate\Http\Request;

class Images3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $images_cs3 = Images_cs3::all();
        return view('admin/images_cs3', compact('images_cs3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        if($request->hasFile('upload_image')){
            $image = $request->file('upload_image');
            $name_image = rand(). '.' .$image->getClientOriginalExtension();  
            $image->move(public_path('image'), $name_image);
            $request->merge(['img'=>$name_image]);
        }
        Images_cs3::create($request->all());
        return redirect()->route('images_cs3')->with('success','bạn đã thêm mới thành công');
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
     * @param  \App\Model\Images_cs3  $images_cs3
     * @return \Illuminate\Http\Response
     */
    public function show(Images_cs3 $images_cs3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Images_cs3  $images_cs3
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $images_cs3 = Images_cs3::all();
        $model = Images_cs3::find($id);
        return view('admin/images_cs3_edit', compact('images_cs3','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Images_cs3  $images_cs3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if($request->hasFile('upload_image')){
            $image = $request->file('upload_image');
            $image_name = rand(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('image'), $image_name);
            $request->merge(['img'=>$image_name]);
            Images_cs3::where('id',$id)->update([
               'name' => $request->input('name'),
               'img' => $request->input('img')
            ]);
        }
        Images_cs3::where('id',$id)->update([
            'name' => $request->input('name')
        ]);
        return redirect()->route('images_cs3')->with('warning','bạn đã chỉnh sửa thành công');
    }  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Images_cs3  $images_cs3
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Images_cs3::where('id',$id)->delete();
        return redirect()->route('images_cs3')->with('danger','bạn đã xóa thành công');
    }
}
