<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Images_customer;
use Illuminate\Http\Request;

class ImagesCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $images_customer = Images_customer::all();
        return view('admin/images_customer',compact('images_customer'));
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
        Images_customer::create($request->all());
        return redirect()->route('images_customer')->with('success','bạn đã thêm mới thành công');
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
     * @param  \App\Model\Images_customer  $images_customer
     * @return \Illuminate\Http\Response
     */
    public function show(Images_customer $images_customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Images_customer  $images_customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id) 
    {   
        $images_customer = Images_customer::all();
        $model = Images_customer::find($id);
        return view('admin/images_customer_edit',compact('images_customer','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Images_customer  $images_customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if($request->hasFile('upload_image')){
            $image = $request->file('upload_image');
            $name_image = rand(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('image'), $name_image);
            $request->merge(['img'=>$name_image]);
            Images_customer::where('id',$id)->update([
                'name' => $request->input('name'),
                'img' => $request->input('img')
            ]);
        }
        Images_customer::where('id',$id)->update([
            'name' => $request->input('name')
        ]);
        return redirect()->route('images_customer')->with('warning','bạn đã chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Images_customer  $images_customer
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Images_customer::where('id',$id)->delete();
        return redirect()->route('images_customer')->with('danger','bạn đã xóa thành công');
    }
}
