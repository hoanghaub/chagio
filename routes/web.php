<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('template');
Route::group(['prefix'=>'admin'],function(){
   // admin
   Route::get('/','Admin\AdminController@index')->name('admin');
   //images_cs1
   Route::get('images_cs1','Admin\Images1Controller@index')->name('images_cs1');
   Route::post('images_cs1','Admin\Images1Controller@create')->name('images_cs1');
   Route::get('images_cs1_delete/{id}','Admin\Images1Controller@delete')->name('images_cs1_delete');
   Route::get('images_cs1_edit/{id}','Admin\Images1Controller@edit')->name('images_cs1_edit');
   Route::post('images_cs1_edit/{id}','Admin\Images1Controller@update')->name('images_cs1_edit');

   //images_cs2
   Route::get('images_cs2','Admin\Images2Controller@index')->name('images_cs2');
   Route::post('images_cs2','Admin\Images2Controller@create')->name('images_cs2');
   Route::get('images_cs2_delete/{id}','Admin\Images2Controller@delete')->name('images_cs2_delete');
   Route::get('images_cs2_edit/{id}','Admin\Images2Controller@edit')->name('images_cs2_edit');
   Route::post('images_cs2_edit/{id}','Admin\Images2Controller@update')->name('images_cs2_edit');
   //images_cs3
   Route::get('images_cs3','Admin\Images3Controller@index')->name('images_cs3');
   Route::post('images_cs3','Admin\Images3Controller@create')->name('images_cs3');
   Route::get('images_cs3_delete/{id}','Admin\Images3Controller@delete')->name('images_cs3_delete');
   Route::get('images_cs3_edit/{id}','Admin\Images3Controller@edit')->name('images_cs3_edit');
   Route::post('images_cs3_edit/{id}','Admin\Images3Controller@update')->name('images_cs3_edit');
   //images_cs4
   Route::get('images_cs4','Admin\Images4Controller@index')->name('images_cs4');
   Route::post('images_cs4','Admin\Images4Controller@create')->name('images_cs4');
   Route::get('images_cs4_delete/{id}','Admin\Images4Controller@delete')->name('images_cs4_delete');
   Route::get('images_cs4_edit/{id}','Admin\Images4Controller@edit')->name('images_cs4_edit');
   Route::post('images_cs4_edit/{id}','Admin\Images4Controller@update')->name('images_cs4_edit');
   //images_cs5
   Route::get('images_cs5','Admin\Images5Controller@index')->name('images_cs5');
   Route::post('images_cs5','Admin\Images5Controller@create')->name('images_cs5');
   Route::get('images_cs5_delete/{id}','Admin\Images5Controller@delete')->name('images_cs5_delete');
   Route::get('images_cs5_edit/{id}','Admin\Images5Controller@edit')->name('images_cs5_edit');
   Route::post('images_cs5_edit/{id}','Admin\Images5Controller@update')->name('images_cs5_edit');
   //images_customer
   Route::get('images_customer','Admin\ImagesCustomerController@index')->name('images_customer');
   Route::post('images_customer','Admin\ImagesCustomerController@create')->name('images_customer');;
   Route::get('images_customer_delete/{id}','Admin\ImagesCustomerController@delete')->name('images_customer_delete');
   Route::get('images_customer_edit/{id}','Admin\ImagesCustomerController@edit')->name('images_customer_edit');
   Route::post('images_customer_edit/{id}','Admin\ImagesCustomerController@update')->name('images_customer_edit');
   
   //address
   Route::get('address','Admin\AddressController@index')->name('address');
   Route::post('address','Admin\AddressController@create')->name('address');
   Route::get('address_delete/{id}','Admin\AddressController@delete')->name('address_delete');
   Route::get('address_edit/{id}','Admin\AddressController@edit')->name('address_edit');
   Route::post('address_edit/{id}','Admin\AddressController@update')->name('address_edit');
   //article
   Route::get('article','Admin\ArticleController@index')->name('article');
   Route::post('article','Admin\ArticleController@create')->name('article');
   Route::get('article_delete/{id}','Admin\ArticleController@delete')->name('article_delete');
   Route::get('article_edit/{id}','Admin\ArticleController@edit')->name('article_edit');
   Route::post('article_edit/{id}','Admin\ArticleController@update')->name('article_edit');
   //article_detail
   Route::get('article_detail','Admin\ArticleDetailController@index')->name('article_detail');
   Route::post('article_detail','Admin\ArticleDetailController@create')->name('article_detail');
   Route::get('article_detail_delete/{id}','Admin\ArticleDetailController@delete')->name('article_detail_delete');
   Route::get('article_detail_edit/{id}','Admin\ArticleDetailController@edit')->name('article_detail_edit');
   Route::post('article_detail_edit/{id}','Admin\ArticleDetailController@update')->name('article_detail_edit');
   //Contact
   Route::get('contact','Admin\ContactController@index')->name('contact');
   Route::post('contact','Admin\ContactController@create')->name('contact');
   Route::get('contact_delete/{id}','Admin\ContactController@delete')->name('contact_delete');
   Route::get('contact_edit/{id}','Admin\ContactController@edit')->name('contact_edit');
   Route::post('contact_edit/{id}','Admin\ContactController@update')->name('contact_edit');
   //introduction
   Route::get('introduction','Admin\IntroductionController@index')->name('introduction');
   Route::post('introduction','Admin\IntroductionController@create')->name('introduction');
   Route::get('introduction_delete/{id}','Admin\IntroductionController@delete')->name('introduction_delete');
   Route::get('introduction_edit/{id}','Admin\IntroductionController@edit')->name('introduction_edit');
   Route::post('introduction_edit/{id}','Admin\IntroductionController@update')->name('introduction_edit');
   //menu
   Route::get('menu','Admin\MenuController@index')->name('menu');
   Route::post('menu','Admin\MenuController@create')->name('menu');
   Route::get('menu_delete/{id}','Admin\MenuController@delete')->name('menu_delete');
   Route::get('menu_edit/{id}','Admin\MenuController@edit')->name('menu_edit');
   Route::post('menu_edit/{id}','Admin\MenuController@update')->name('menu_edit');
   //news
   Route::get('news','Admin\NewsController@index')->name('news');
   Route::post('news','Admin\NewsController@create')->name('news');
   Route::get('news_delete/{id}','Admin\NewsController@delete')->name('news_delete');
   Route::get('news_edit/{id}','Admin\NewsController@edit')->name('news_edit');
   Route::post('news_edit/{id}','Admin\NewsController@update')->name('news_edit');
   //news_detail
   Route::get('news_detail','Admin\NewsDetailController@index')->name('news_detail');
   Route::post('news_detail','Admin\NewsDetailController@create')->name('news_detail');
   Route::get('news_detail_delete/{id}','Admin\NewsDetailController@delete')->name('news_detail_delete');
   Route::get('news_detail_edit/{id}','Admin\NewsDetailController@edit')->name('news_detail_edit');
   Route::post('news_detail_edit/{id}','Admin\NewsDetailController@update')->name('news_detail_edit');
   //promotion
   Route::get('promotion','Admin\PromotionController@index')->name('promotion');
   Route::post('promotion','Admin\PromotionController@create')->name('promotion');
   Route::get('promotion_delete/{id}','Admin\PromotionController@delete')->name('promotion_delete');
   Route::get('promotion_edit/{id}','Admin\PromotionController@edit')->name('promotion_edit');
   Route::post('promotion_edit/{id}','Admin\PromotionController@update')->name('promotion_edit');
   //promotion detail
   Route::get('promotion_detail','Admin\PromotionDetailController@index')->name('promotion_detail');
   Route::post('promotion_detail','Admin\PromotionDetailController@create')->name('promotion_detail');
   Route::get('promotion_detail_delete/{id}','Admin\PromotionDetailController@delete')->name('promotion_detail_delete');
   Route::get('promotion_detail_edit/{id}','Admin\PromotionDetailController@edit')->name('promotion_detail_edit');
   Route::post('promotion_detail_edit/{id}','Admin\PromotionDetailController@update')->name('promotion_detail_edit');

});
//su ly dang nhap
Route::get('login','Auth\LoginController@getLogin')->name('login');
Route::post('login','Auth\LoginController@postLogin')->name('login');
//dang xuat
Route::get('logout','Auth\LoginController@logout')->name('logout');
//register
Route::get('register','Auth\RegisterController@getRegister')->name('register');
Route::post('register','Auth\RegisterController@postRegister')->name('register');
Route::group(['prefix'=>'View'],function(){
    //Introduction
    Route::get('introduction_view','Fontend\IntroductionViewController@index')->name('introduction_view');
    //Menu
    Route::get('menu_view','Fontend\MenuViewController@index')->name('menu_view');
    //Promotion
    Route::get('promotion_view','Fontend\PromotionViewController@index')->name('promotion_view');
    //Promotion_detail
    Route::get('promotion_detail_view/{id}','Fontend\PromotionDetailController@index')->name('promotion_detail_view');
    //Article_detail
    Route::get('article_detail_view/{id}','Fontend\ArticleDetailController@index')->name('article_detail_view');
    //News
    Route::get('news_view','Fontend\NewViewController@index')->name('news_view');
    //News_detail
    Route::get('news_detail_view','Fontend\NewsDetailController@index')->name('news_detail_view');
    //Image
    Route::get('image_view','Fontend\ImageViewController@index')->name('image_view');
    //Contact
    Route::get('contact_view','Fontend\ContactViewController@index')->name('contact_view');
});