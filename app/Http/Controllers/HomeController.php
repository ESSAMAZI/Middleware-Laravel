<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //
    public function index(){
        //الانشاءجلسه
        Session::put('name','Essam Ezi');
        //Session::put('key','value');
        //return dd(Session::all());
        // عرض كل الجلسات
       // return Session::all();
       //جلب جلسه محدده عبر المفتاح
       //return Session::get('name');
       //حذف جلسه محدد عبر المفتاح
       //return Session::forget('email');
       //return
       // حذف كل الجلسات
        //Session::flush();
        // تاكد من ان الجلسه محدده
       if(Session::has('name')){
        return 'yes ';
       }
       else{
        return 'no';
       }
        return view('home');
    }
}
