<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    protected $table ='category';
    protected $primaryKey = 'id';
    protected $fillable =[
        'id',
        'arName',
        'enName',
        'arSlug',
        'enSlug',
        'created_at',
        'updated_at'
    ];

    //ORM
    public function Sub(){
        return $this->belongsToMany(subServices::class);
    }

}
