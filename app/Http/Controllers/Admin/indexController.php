<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    //auth validation
    public function __construct()
    {
        $this->middleware('auth');
    }

    //admin home page
    public function index()
    {
        $arr['page']="index";
        return view('Admin.index',$arr);
    }
}
