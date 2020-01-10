<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotion = Promotion::all();
        return view('admin/promotion',compact('promotion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Promotion::create($request->all());
        return redirect()->route('promotion')->with('success','Bạn đã thêm mới thành công');
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
     * @param  \App\Model\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion,$id)
    {
        $promotion = Promotion::all();
        $model = Promotion::find($id);
        return view('admin/promotion_edit',compact('promotion','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       Promotion::where('id',$id)->update([
            'name' => $request->input('name'),
            'day' => $request->input('day'),
            'content' => $request->input('content')
       ]); 
       return redirect()->route('promotion')->with('warning','Bạn đã chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function delete(Promotion $promotion,$id)
    {
        Promotion::where('id',$id)->delete();
        return redirect()->route('promotion')->with('danger','Bạn đã xóa thành công');
    }
}
