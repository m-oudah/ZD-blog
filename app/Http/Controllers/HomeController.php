<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\blogCategory;
use App\Model\slider;
use App\Model\blog;
use App\Model\aboutus;
use App\Model\PostsViews;
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
        //  App::setlocale($lang);

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

    PostsViews::createViewLog($blogs);//or add `use App\PostView;` in beginning of the file in order to use only `PostView` here 


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


public function mostViwedPosts()
{
    
    return blog::with('user')->where('created_at','>=', now()->subdays(1))->orderBy('views', 'desc')->latest()->paginate(5);
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

        public function saveContact(Request $request) { 

            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'phone_number' => 'required',
                'message' => 'required'
            ]);

            $contact = new Contact;

            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            // $contact->phone_number = $request->phone_number;
            $contact->message = $request->message;

            $contact->save();

            Mail::send('contact_email',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'subject' => $request->get('subject'),
                //  'phone_number' => $request->get('phone_number'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('info@zdportal.com');
               });

            
            return back()->with('success', 'Thank you for contact us!');

        }



}
