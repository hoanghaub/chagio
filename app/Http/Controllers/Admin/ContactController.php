<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return view('admin/contact',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Contact::create($request->all());
        return redirect()->route('contact')->with('success','bạn đã thêm thành công');
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
     * @param  \App\Model\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact,$id)
    {
        $contact = Contact::all();
        $model = Contact::find($id);
        return view('admin/contact_edit',compact('contact','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        Contact::where('id',$id)->update([
            'address' => $request->input('address'),
            'hostline' => $request->input('hostline')
        ]);
        return redirect()->route('contact')->with('warning','Bạn đã chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function delete(Contact $contact,$id)
    {
        Contact::where('id',$id)->delete();
        return redirect()->route('contact')->with('danger','Bạn đã xóa thành công');
    }
}
