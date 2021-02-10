<?php

namespace App\Http\Controllers\Admin;
use App\Model\blogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $subServices=subServices::all();
        // $arr['subServices']=$subServices;
        // $arr['page']="subServices";
        // return view('Admin.Services.subServices.index',$arr);


         $blogCategs=blogCategory::all();
         $arr['blogCategs']=$blogCategs;
         $arr['page']="blogCategs";
         return view('Admin.blog.blogcategs.index',$arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogCategs=blogCategory::all();
        $arr['blogCategs']=$blogCategs;
        $arr['page']="blogCategs";
        return  view('Admin.blog.blogcategs.add',$arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('POST')){


            $request->validate(['arName'=>'required','enName'=>'required', 'baName'=>'required']);

            $enName=$request->enName;
            $check =blogCategory::where('enName',$enName)->first();

            if(!is_null($check)){
                $categs = blogCategory::all();
                $arr['blogCategs']=$categs;
                $arr['page']="blogCategs";
                return view('Admin.Blog.blogcategs.index'
                    ,$arr,['msg'=>'Your Category Already Added !']);
            }else{
                 $enSlug = str_replace(' ','-',$request->enName);
                 $arSlug = str_replace(' ','-',$request->arName);
                 $baSlug = str_replace(' ','-',$request->baName);
                try {
                    blogCategory::create([
                        'enName' => $request->enName,
                        'arName' => $request->arName,
                        'baName' => $request->baName,
                        'enSlug' => $enSlug,
                        'arSlug' => $arSlug ,
                        'baSlug' => $baSlug ,
                    ]);
                }catch(Exception $e){
                    $categs = blogCategory::all();
                    $arr['blogCategs']=$categs;
                    $arr['page']="blogCategs";
                    return view('Admin.Blog.blogcategs.index'
                        ,$arr,['msg'=>'Your Category Already Added !']);
                }
            }
            $categs = blogCategory::all();
            $arr['blogCategs']=$categs;
            $arr['page']="blogCategs";
            return view('Admin.Blog.blogcategs.index',$arr,
                ['msg'=>'Success! Add Categories']);

    }else{

        $arr['page']="blogCategs";
        return view('Admin.Blog.blogcategs.add',$arr);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(blogCategory $blogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(blogCategory $blogCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categs =blogCategory::find($id);
        if($request->isMethod('POST')){
            $request->validate(['arName'=>'required','enName'=>'required','baName'=>'required']);


                    //remove the speace
                    $arSlug=str_replace(' ','-',$request->arName);
                    $enSlug=str_replace(' ','-',$request->enName);
                    $baSlug=str_replace(' ','-',$request->baName);

                    try {
                        $categs->enName =$request->enName;
                        $categs->arName =$request->arName;
                        $categs->baName =$request->baName;
                        $categs->enSlug =$enSlug;
                        $categs->arSlug =$arSlug;
                        $categs->baSlug =$baSlug;
                        $categs->update();
                    }catch (\Exception $e) {
                        $categs = blogCategory::all();
                        $arr['blogCategs']=$services;
                        $arr['page']="blogCategs";
                        //$arr['msg'] =$msg;
                        return view('Admin.Blog.blogcategs.index',$arr,['msg' => 'you already have service in same name']);
                    }
                    //$msg="ok";
                    $categs = blogCategory::all();
                    $arr['blogCategs']=$categs;
                    $arr['page']="blogCategs";
                    return view('Admin.Blog.blogcategs.index'
                        ,$arr,['msg'=>'Success! Update Type Services']);



        }else{


            if(!is_null($categs)){
                $arr['page']="blogCategs";
                $arr['blogCategs']=$categs;
                return view('Admin.Blog.blogcategs.update',$arr);
            }else{
                $categs = blogCategory::all();
                $arr['blogCategs']=$categs;
                $arr['page']="blogCategs";
                //$arr['msg'] =$msg;
                return view('Admin.Blog.blogcategs.index',$arr);
            }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categ =blogCategory::find($id);
        try {
            $categ->delete();
        }catch (\Exception $e){
        }
        return redirect()->back()->with('msg' ,  'Blog Category Has been deleted successfully ');
    }
}
