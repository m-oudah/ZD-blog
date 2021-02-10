<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use App\Model\blog;
use App\Model\blogCategory;

use Auth;
use DB;


class ApiController extends Controller
{
    public function getAllBlogs() {
        // $players = DB::table('users')
        // //->join('teams', 'players.teamID', '=', 'teams.teamID')
        // ->select('users.id', 'users.name','users.profile_pic','users.email' ,'users.mobile_no')
        // ->where('users.user_type',3)
        // ->get();

       
        $blogs = blog::all();
       // $categs = blogCategory::all();

      //  $arr['blogCategs']=$categs;
        $arr['blogs']=$blogs;

    

       // return response()->json(auth($this->guard)->user());

        return response()->json(['code'=> 200, 'data'=>$arr]);
      }



      public function getBlogCategs() {
        // $players = DB::table('users')
        // //->join('teams', 'players.teamID', '=', 'teams.teamID')
        // ->select('users.id', 'users.name','users.profile_pic','users.email' ,'users.mobile_no')
        // ->where('users.user_type',3)
        // ->get();

       
       // $blogs = blog::all();
        $categs = blogCategory::all();

        $arr['blogCategs']=$categs;
      

       // return response()->json(auth($this->guard)->user());

        return response()->json(['code'=> 200, 'data'=>$arr]);
      }


      public function getBlogByCat($cat_id) {
        $blogs = DB::table('blogs')
        ->join('blog_category', 'blog_category.id', '=', 'blogs.catId')
        ->select('blogs.id', 'blog_category.arName','blog_category.enName','blog_category.baName')
        ->where('blog_category.id',$cat_id)
        ->get();

        $arr['blogs']=$blogs;

       // return response()->json(auth($this->guard)->user());

        return response()->json(['code'=> 200, 'data'=>$arr]);
      }

}
