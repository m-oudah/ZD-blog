<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class subServices extends Model
{
    protected $table = 'sub_category';
    protected $primaryKey ='id';
    protected $fillable = [
        'id',
        'classId',
        'arName',
        'enName',
        'enSlug',
        'arSlug',
        'img',
        'created_at',
        'updated_at'
    ];
    //ORM
    public function Category(){
        return $this->belongsTo(services::class,'classId');
    }
}
