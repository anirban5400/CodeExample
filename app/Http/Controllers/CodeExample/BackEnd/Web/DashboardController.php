<?php

namespace App\Http\Controllers\CodeExample\BackEnd\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Mail;
use Validator;
use Session;
use Redirect;

class DashboardController extends Controller
{
    public function home(Request $request){
        $page_name='home';
        $params=$request->all();
        return view('p_code.back_end.pages.home',compact('page_name'));
    }

    public function blog_list(Request $request){
        $page_name='blog_list';
        $params=$request->all();
        return view('p_code.back_end.pages.blog.list',compact('page_name'));
    }
    public function blog_add(Request $request){
        $page_name='blog_add';
        $params=$request->all();
        return view('p_code.back_end.pages.blog.add',compact('page_name'));
    }
    public function blog_edit(Request $request){
        $page_name='blog_edit';
        $params=$request->all();
        return view('p_code.back_end.pages.blog.edit',compact('page_name'));
    }

}
