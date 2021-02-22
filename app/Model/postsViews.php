<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

use App\blog;

class PostsViews extends Model {

    public function postsViews()
    {
        return $this->belongsTo(blog::class);
    }



    // protected $table = 'posts_views';

    public static function createViewLog($blog) {
        $postViews= new PostsViews();
        $postViews->blog_id = $blog->id;
        $postViews->enSlug = $blog->enSlug;
        $postViews->url = request()->url();
        $postViews->session_id = request()->getSession()->getId();
        $postViews->user_id = (auth()->check())?auth()->id():null; 
        $postViews->ip = request()->ip();
        $postViews->agent = request()->header('User-Agent');
        $postViews->save();
    }

}