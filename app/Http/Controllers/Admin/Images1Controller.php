<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Images_cs1;
class Images1Controller extends Controller
{
    public function index(){
    	$images_cs1 = Images_cs1::all();
    	return view('admin/images_cs1',compact('images_cs1'));
    }

    public function create(Request $request){

    	if($request->hasFile('upload_image')) {
           $image = $request->file('upload_image');
           $name_image = rand(). '.' .$image->getClientOriginalExtension();
           $image->move(public_path('image'), $name_image);
           $request->merge(['img'=>$name_image]);
    	}
    	Images_cs1::create($request->all());
    	return redirect()->route('images_cs1')->with('success','bạn đã thêm ảnh mới thành công');
    }

    public function delete($id){
    	Images_cs1::where('id',$id)->delete();
    	return redirect()->route('images_cs1')->with('danger','bạn đã xóa thành công');
    }

    public function edit($id){
    	$images_cs1 = Images_cs1::all();
        $model = Images_cs1::find($id);
    	return view('admin/images_cs1_edit', compact('images_cs1','model'));
    }

    public function update(Request $request,$id){
         $model = Images_cs1::find($id);
         if($request->hasFile('upload_image')){
            $image = $request->file('upload_image');
            $name_image = rand(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('image'), $name_image);
            $request->merge(['img'=>$name_image]);
            Images_cs1::where('id',$id)->update([
                'name' => $request->input('name'),
                'img' => $request->input('img')
            ]);
         }
         Images_cs1::where('id',$id)->update([
            'name' => $request->input('name')
         ]);

         return redirect()->route('images_cs1')->with('warning','bạn đã chỉnh sửa thành công');
    }
}
