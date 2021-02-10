<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $table ='slider';
    protected $primaryKey = 'id';
    protected $fillable =[
        'id',
        'arTitle',
        'enTitle',
        'baTitle',
        'arSlug',
        'enSlug',
        'baSlug',
        'img',
        'created_at',
        'updated_at'
    ];
}
