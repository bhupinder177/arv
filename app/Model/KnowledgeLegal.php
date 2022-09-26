<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KnowledgeLegal extends Model
{
  protected $fillable = [
      'title',
      'description',
      'image',
  ];
}
