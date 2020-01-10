<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Images_cs1;
use App\Model\Images_cs2;
use App\Model\Images_cs3;
use App\Model\Images_cs4;
use App\Model\Images_cs5;
use App\Model\Images_customer;
use App\Model\Address;
class ImageViewController extends Controller
{
    public function index(){
    	$images_cs1_view = Images_cs1::all();
    	$images_cs2_view = Images_cs2::all();
    	$images_cs3_view = Images_cs3::all();
    	$images_cs4_view = Images_cs4::all();
    	$images_cs5_view = Images_cs5::all();
    	$images_customer_view = Images_customer::all();
    	$address_view = Address::all();
    	return view('fontend/image_view',compact('images_cs1_view','images_cs2_view','images_cs3_view','images_cs4_view','images_cs5_view','images_customer_view','address_view'));
    }
}
