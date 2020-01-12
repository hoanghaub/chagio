<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//contact
Route::get('contact','API\ContactController@index');
//address
Route::get('address','API\AddressController@index');
//article
Route::get('article','API\ArticleController@index');
//article_detail
Route::get('article_detail','API\ArticleDetailController@index');
//Images
   //cs1
   Route::get('images_cs1','API\ImagesCs1Controller@index');
   //cs2
   Route::get('images_cs2','API\ImagesCs2Controller@index');
   //cs3
   Route::get('images_cs3','API\ImagesCs3Controller@index');
   //cs4
   Route::get('images_cs4','API\ImagesCs4Controller@index');
   //cs5
   Route::get('images_cs5','API\ImagesCs5Controller@index');
   //customer
   Route::get('images_customer','API\ImagesCustomerController@index');
//introduction
Route::get('introduction','API\IntroductionController@index');
//menu
Route::get('menu','API\MenuController@index');
//promotion
Route::get('promotion','API\PromotionController@index');
//promotion detail
Route::get('promotion_detail','API\PromotionDetailController@index');