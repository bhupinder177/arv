<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'name',

    ];

    // public function getAllCatTypes() {
    //     return $this->hasmany('App\Model\CategoryRelationType','category_id','id');
    // }

    
}
