<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  protected $fillable = [
      'title',
      'description',
      'image',
      'category_id',
      'user_id'
  ];


  public function user()
  {
    return $this->hasOne('App\Model\User','id','user_id');
  }

  public function category()
  {
    return $this->hasOne('App\Model\Categories','id','category_id');
  }

}
