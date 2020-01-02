<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Images_food;
use Illuminate\Http\Request;

class ImagesFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images_food = Images_food::all();
        return view('admin/images_food',compact('images_food'));
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
        Images_food::create($request->all());
        return redirect()->route('images_food')->with('success','bạn đã thêm mới thành công');
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
     * @param  \App\Model\Images_food  $images_food
     * @return \Illuminate\Http\Response
     */
    public function show(Images_food $images_food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Images_food  $images_food
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $images_food = Images_food::all();
        $model = Images_food::find($id);
        return view('admin/images_food_edit',compact('images_food','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Images_food  $images_food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if($request->hasFile('upload_image')){
            $image = $request->file('upload_image');
            $name_image = rand(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('image'), $name_image);
            $request->merge(['img'=>$name_image]);
            Images_food::where('id',$id)->update([
                'name' => $request->input('name'), 
                'img' => $request->input('img') 
            ]);
        }
        Images_food::where('id',$id)->update([
            'name' => $request->input('name')
        ]);
        return redirect()->route('images_food')->with('warning','bạn đã chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Images_food  $images_food
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       Images_food::where('id',$id)->delete();
       return redirect()->route('images_food')->with('danger','bạn đã xóa thành công');
    }
}
