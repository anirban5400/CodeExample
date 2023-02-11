<?php

namespace App\Http\Controllers\Main\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Mail;
use Validator;
use Session;
use Redirect;

class DashboardController extends Controller
{
    public function all_dashboard_menu(Request $request)
    {
        $page_name='all_dashboard_menu';
        $params=$request->all();
        return view('pages.all_dashboard_menu',compact('page_name'));
    }
}
