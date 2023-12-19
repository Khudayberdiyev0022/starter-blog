<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;

  protected $fillable = ['title', 'slug', 'description', 'image', 'meta_title', 'meta_description', 'meta_keyword', 'order', 'status'];
}
