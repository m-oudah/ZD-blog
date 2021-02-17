<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\blog;
use App\Model\blogCategory;
use Illuminate\Http\Request;

class blogController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=blog::all();
        $arr['blogs']=$blogs;
        $arr['page']="blogs";
        return  view('Admin.Blog.index',$arr);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['page']="blog";
        $blogs = blog::all();
        $categs = blogCategory::all();

        $arr['blogCategs']=$categs;
        $arr['blogs']=$blogs;

        return  view('Admin.Blog.add',$arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
         
           'enTitle' => 'required|min:10',
           'arTitle' => 'required|min:10',
           'baTitle' => 'required|min:10',
           'enInfo' => 'required|min:50',
           'arInfo' => 'required|min:50',
           'baInfo' => 'required|min:50',
         
           'img' => 'required|required|mimes:jpg,jpeg,png|max:400'
       ]);
        $photo=$request->file('img');
        $path=$photo->storeAs('blogs','A-'.time().$photo->getClientOriginalName(),'images');
        $enSlug = str_replace(' ','-',$request->enTitle);
        $arSlug = str_replace(' ','-',$request->arTitle);
        $baSlug = str_replace(' ','-',$request->baTitle);
        try {
            blog::create([
                'catId' => $request->categId,
                'enTitle' => $request->enTitle,
                'arTitle' => $request->arTitle,
                'baTitle' => $request->baTitle,
                'enInfo' => $request->enInfo,
                'arInfo' => $request->arInfo,
                'baInfo' => $request->baInfo,
                'img' => $path,
                'enSlug'=> $enSlug,
                'arSlug'=> $arSlug,
                'baSlug'=> $baSlug,
            ]);
        }catch (Exception $e){
            return back()->with('err' , 'you have already added same blog with same title kindly check');
        }
        return redirect()->route('index.Admin.Blog')->with('msg' ,  'New Blog Has been added successfully ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $blog =blog::find($id);
       $arr['blog']=$blog;
       $arr['page']="blog";
       return view('Admin.Blog.read',$arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog =blog::find($id);
        $blogCategory =blogCategory::all();
        $arr['blog']=$blog;
        $arr['blogCategs']=$blogCategory;
        $arr['page']="blog";
        $arr['page']="blogCategs";
        return view('Admin.Blog.update',$arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog =blog::find($id);
        $request->validate([
            'enTitle' => 'required|min:10',
            'arTitle' => 'required|min:10',
            'baTitle' => 'required|min:10',
            'enInfo' => 'required|min:50',
            'arInfo' => 'required|min:50',
            'baInfo' => 'required|min:50'
           
        ]);
        if(!is_null($request->img)){
            try{
                unlink(public_path('/images/'.$blog->img));
            }catch (\Exception $exception){

            }
            $photo=$request->file('img');
            $path=$photo->storeAs('blogs','A-'.time().$photo->getClientOriginalName(),'images');
            $blog->img = $path;
            $blog->update();
        }
        $enSlug = str_replace(' ','-',$request->enTitle);
        $arSlug = str_replace(' ','-',$request->arTitle);
        $baSlug = str_replace(' ','-',$request->baTitle);
        $blog->enTitle = $request->enTitle;
        $blog->arTitle = $request->arTitle;
        $blog->baTitle = $request->baTitle;
        $blog->enInfo = $request->enInfo;
        $blog->arInfo = $request->arInfo;
        $blog->baInfo = $request->baInfo;
        $blog->enSlug = $enSlug;
        $blog->arSlug = $arSlug;
        $blog->baSlug = $baSlug;
        $blog->catId = $request->catId;
        $blog->update();
        return redirect()->route('index.Admin.Blog')->with('msg' ,  'Blog Has been updated successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog =blog::find($id);
        try {
            unlink(public_path('/images/'.$blog->img));
            $blog->delete();
        }catch (\Exception $e){
        }
        return redirect()->back()->with('msg' ,  'Blog Has been deleted successfully ');
    }
}
