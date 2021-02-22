<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table="blogs";
    protected $primaryKey ="id";
    protected $fillable = [
        'id',
        'catId',
        'enTitle',
        'arTitle',
        'baTitle',
        'enSlug',
        'arSlug',
        'baSlug',
        'enInfo',
        'arInfo',
        'baInfo',
        'img',
        'created_at',
        'updated_at'
    ];
  

    public function Category(){
        return $this->belongsTo(blogCategory::class,'catId');
    }

    public function postsViews()
    {
        return $this->hasMany(PostsViews::class);
    }

    

    public function showPost()
    {
        if(auth()->id()==null){
            return $this->postsViews()
            ->where('ip', '=',  request()->ip())->exists();
        }

        return $this->postsViews()
        ->where(function($postViewsQuery) { $postViewsQuery
            ->where('session_id', '=', request()->getSession()->getId())
            ->orWhere('user_id', '=', (auth()->check()));})->exists();  
    }


    


}
