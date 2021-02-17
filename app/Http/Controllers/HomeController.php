<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\blogCategory;
use App\Model\slider;
use App\Model\blog;
use App\Model\aboutus;
use App;
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
    public function index($lang)
    {
        // App::setlocale($lang);

        $blogCategs=blogCategory::all();
        $arr['blogCategs']=$blogCategs;
        $arr['page']="blogCategs";
    
        $latestposts=blog::paginate(6);
        $arr['latestposts']=$latestposts;
        $arr['page']="latestposts";

        $trendingposts=blog::paginate(5);
        $arr['trendingposts']=$trendingposts;
        $arr['page']="trendingposts";


        $popularposts=blog::paginate(4);
        $arr['popularposts']=$popularposts;
        $arr['page']="popularposts";

        $slider=slider::all();
        $arr['slider']=$slider;
        $arr['page']="slider";

        $blogs=blog::all();
        $arr['blogs']=$blogs;
        $arr['page']="blogs";


        return view('main',$arr);

    }

public function singlePost ($lang, $id){
   

    $slider=slider::all();
    $arr['slider']=$slider;
    $arr['page']="slider";

    $latestposts=blog::paginate(6);
    $arr['latestposts']=$latestposts;
    $arr['page']="latestposts";


    $popularposts=blog::paginate(4);
    $arr['popularposts']=$popularposts;
    $arr['page']="popularposts";


   
    $blogs =blog::find($id);
    $blogCategory =blogCategory::all();
    $arr['blogs']=$blogs;
    $arr['blogCategs']=$blogCategory;
    $arr['page']="blogs";
    $arr['page']="blogCategs";

    return view('singlepost',$arr);
}

public function findPost ($lang,Request $request){
   
$title = $request->title;
   

    $latestposts=blog::paginate(6);
    $arr['latestposts']=$latestposts;
    $arr['page']="latestposts";


    $popularposts=blog::paginate(4);
    $arr['popularposts']=$popularposts;
    $arr['page']="popularposts";


   
    $blogs =blog::where(['enInfo'=>$title, 'arInfo'=>$title])->get();

    $blogCategory =blogCategory::all();
    $arr['blogs']=$blogs;
    $arr['blogCategs']=$blogCategory;
    $arr['page']="blogs";
    $arr['page']="blogCategs";

    return view('find',$arr);
}


public function categPosts ($lang,$catID) {

    
    $blogCategory =blogCategory::all();
    $arr['blogCategs']=$blogCategory;
    $arr['page']="blogCategs";
      
    $category =blogCategory::find($catID);
    $arr['category']=$category;
    $arr['page']="category";
      


     $blogs =blog::where('catId', $catID)->get();
     $arr['blogs']=$blogs;
     $arr['page']="blogs";

    // $blogCategory =blogCategory::paginate(10);
    // $arr['blogs']=$blogs;
    // $arr['blogCategs']=$blogCategory;
    // $arr['page']="blogs";
    // $arr['page']="blogCategs";


    return view('categ',$arr);
}

public function aboutus (){
   

    $popularposts=blog::paginate(4);
    $arr['popularposts']=$popularposts;
    $arr['page']="popularposts";

    
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
    
public function contact (){
   

    
    $latestposts=blog::paginate(5);
    $arr['latestposts']=$latestposts;
    $arr['page']="latestposts";

    $aboutus =aboutus::find(1);
      
    $blogCategory =blogCategory::all();

    $arr['aboutus']=$aboutus;
    $arr['blogCategs']=$blogCategory;
    $arr['page']="aboutus";
    $arr['page']="blogCategs";



    return view('contact',$arr);
}

    public function demo()
    {
        return view('demo');
    }

}
