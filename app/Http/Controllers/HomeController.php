<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\blogCategory;
use App\Model\slider;
use App\Model\blog;
use App\Model\aboutus;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogCategs=blogCategory::all();
        $arr['blogCategs']=$blogCategs;
        $arr['page']="blogCategs";
    
        $latestposts=blog::paginate(8);
        $arr['latestposts']=$latestposts;
        $arr['page']="latestposts";

        $trendingposts=blog::paginate(5);
        $arr['trendingposts']=$trendingposts;
        $arr['page']="trendingposts";


        $slider=slider::all();
        $arr['slider']=$slider;
        $arr['page']="slider";

        $blogs=blog::all();
        $arr['blogs']=$blogs;
        $arr['page']="blogs";


        return view('main',$arr);

    }

public function singlePost ($id){
   

    $slider=slider::all();
    $arr['slider']=$slider;
    $arr['page']="slider";


    $latestposts=blog::paginate(5);
    $arr['latestposts']=$latestposts;
    $arr['page']="latestposts";


   
    $blogs =blog::find($id);
    $blogCategory =blogCategory::all();
    $arr['blogs']=$blogs;
    $arr['blogCategs']=$blogCategory;
    $arr['page']="blogs";
    $arr['page']="blogCategs";



    return view('singlepost',$arr);
}

public function aboutus (){
   

    
    $latestposts=blog::paginate(5);
    $arr['latestposts']=$latestposts;
    $arr['page']="latestposts";

    $aboutus =aboutus::find(1);
      
    $blogCategory =blogCategory::all();

    $arr['aboutus']=$aboutus;
    $arr['blogCategs']=$blogCategory;
    $arr['page']="aboutus";
    $arr['page']="blogCategs";



    return view('aboutus',$arr);
}
    

    public function demo()
    {
        return view('demo');
    }

}
