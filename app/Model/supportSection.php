<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class supportSection extends Model
{
    protected $table ='support_section';
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

    public function Sub(){
        return $this->belongsToMany(support::class);
    }

}
