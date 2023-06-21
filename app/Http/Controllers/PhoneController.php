<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhoneController extends Controller
{
    //
    function creates(){
        // echo "Thêm sản phẩm"
        return view('phone.create');
        // return redirect('update');
    }
    function show(){
        return view('phone.show');
    }
    function update($id){
        // echo "cập nhật sản phẩm id:".$id;
        // return view('phone.update');
        return redirect('phone/creates');
    }
    function showDetail($id){
        // echo "Chi tiết sản phẩm id:".$id;
        $price = 1000;
        $colors = ['red','greem'];
        return view('phone.show',compact('id','price','colors'));
    }
    
}
