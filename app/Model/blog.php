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
    // protected $appends = ['created_date'];
    // public function getCreatedDateAttribute(){
    //     return $this->created_at->diffForHumans();
    // }

    public function Category(){
        return $this->belongsTo(blogCategory::class,'catId');
    }
}
