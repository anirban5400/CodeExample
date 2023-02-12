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
        return view('p_code.back_end.pages.overview',compact('page_name'));
    }
}
