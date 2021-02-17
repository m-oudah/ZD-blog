<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class aboutus extends Model
{
    protected $table ='about_us';
    protected $primaryKey = 'id';
    protected $fillable =[
        'id',
        'arInfo',
        'enInfo',
        'baInfo',
        'enContact',
        'arContact',
        'enContact',
        'footer_text',
        'created_at',
        'updated_at'
    ];
}
