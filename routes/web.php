<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\NewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/post', function () {
//     return "chào mừng hoàng đến với laravel";
// });
// Route::get('/post/{id}', function ($id) {
//     return $id;
// });
// Route::get('/posts/{cat_id}/page/{page}', function ($cat_id,$page) {
//     return $cat_id.'-'.$page;
// });
// Route::get('/admin/product/add', function () {
//     return route('product.add');
// }) -> name('product.add');

// domain/user => hiển thị danh sách user
// domain/user/3 => hiển thị user có id = 3

Route :: get('users/{id?}',function($id = 0){
    return $id;
});

// Định tuyến với tham số có ràng buộc 
// Route :: get('shop/{id}',function($id){
//     return $id;
// }) -> where('id','[0-9]+');

// Định tuyến với 2 tham số có ràng buộc

// Route :: get('shop/{plug}/{id}',function($plug,$id){
//     return $plug . '-' . $id;
// }) -> where(['plug' => '[A-Za-z0-9-_]+','id' =>'[0-9]+']);

// Định tuyến với 2 tham số có ràng buộc trong app/providers/fc-boot
// Route :: get('home/{plug}/{id}',function($plug,$id){
//     return $plug . '-' . $id;
// }) -> where(['plug' => '[A-Za-z0-9-_]+']);

// định tuyến đến view ko cần thông qua db,controller
// Route::view('/welcome','welcome');
// Route::view('/post9','post',['id' => 10]);

// định tuyến đến controller
// tạo file controller : php artisan make:controller name_file
// Route :: get('/postC/{id}','App\Http\Controllers\PostController@detail');

// Route :: get('admin/add' , function(){
//     return "thêm bài viết";
// });
// Route :: get('admin/list' , function(){
//     return "list bài viết";
// });
// Route :: get('admin/update/{id}' , function($id){
//     return "thêm bài viết".$id;
// });
// Route :: get('admin/delete/{id}' , function($id){
//     return "thêm bài viết".$id;
// });

//goi controller tu route .. ss6.3
Route :: get('phone/creates','\App\Http\Controllers\PhoneController@creates');
Route :: get('phone/update/{id?}','\App\Http\Controllers\PhoneController@update');
Route :: get('phone/show/{id}','\App\Http\Controllers\PhoneController@showDetail');

// Định tuyến resource
Route :: resource('news',NewController :: class);
