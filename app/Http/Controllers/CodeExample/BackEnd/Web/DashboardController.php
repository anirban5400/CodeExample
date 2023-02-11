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
    public function overview(Request $request)
    {
        $page_name='overview';
        $params=$request->all();
        return view('back_end.p_code.pages.overview',compact('page_name'));
    }
}
