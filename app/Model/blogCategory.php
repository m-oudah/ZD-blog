<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class blogCategory extends Model
{
    protected $table ='blog_category';
    protected $primaryKey = 'id';
    protected $fillable =[
        'id',
        'arName',
        'enName',
        'baName',
        'arSlug',
        'enSlug',
        'baSlug',
        'created_at',
        'updated_at'
    ];

     //ORM
     public function Sub(){
        return $this->belongsToMany(blog::class);
    }

}
