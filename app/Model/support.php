<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class support extends Model
{
    protected $table="support";
    protected $primaryKey ="id";
    protected $fillable = [
        'id',
        'sectionID',
        'enTitle',
        'arTitle',
        'enSlug',
        'arSlug',
        'enInfo',
        'arInfo',
        'baInfo',
        'created_at',
        'updated_at'
    ];

    public function Category(){
        return $this->belongsTo(supportSection::class,'sectionID');
    }


}
