<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Promotion_detail;
use Illuminate\Http\Request;

class PromotionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotion_detail = Promotion_detail::all();
        return view('admin/promotion_detail',compact('promotion_detail'));
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
        Promotion_detail::create($request->all());
        return redirect()->route('promotion_detail')->with('success','Bạn đã thêm mới thành công');
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
     * @param  \App\Model\Promotion_detail  $promotion_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion_detail $promotion_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Promotion_detail  $promotion_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion_detail $promotion_detail,$id)
    {
        $promotion_detail = Promotion_detail::all();
        $model = Promotion_detail::find($id);
        return view('admin/promotion_detail_edit',compact('promotion_detail','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Promotion_detail  $promotion_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if($request->hasFile('upload_image')){
            $image = $request->file('upload_image');
            $name_image = rand(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('image'), $name_image);
            $request->merge(['img'=>$name_image]);
            Promotion_detail::where('id',$id)->update([
                'name' => $request->input('name'),
                'day' => $request->input('day'),
                'content' => $request->input('content'),
                'img' => $request->input('img')
            ]);
        }
        Promotion_detail::where('id',$id)->update([
            'name' => $request->input('name'),
            'day' => $request->input('day'),
            'content' => $request->input('content')
            
        ]);
        return redirect()->route('promotion_detail')->with('warning','Bạn đã chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Promotion_detail  $promotion_detail
     * @return \Illuminate\Http\Response
     */
    public function delete(Promotion_detail $promotion_detail,$id)
    {
        Promotion_detail::where('id',$id)->delete();
        return redirect()->route('promotion_detail')->with('danger','Bạn đã xóa thành công');
    }
}
