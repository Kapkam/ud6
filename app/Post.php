<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table='posts';
  protected $fillable=['id','title','excerpt', 'body', 'image', 'published_at', 'category_id', 'user_id', 'created_at', 'updated_at'];
}
