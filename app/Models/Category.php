<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

  protected $fillable = ['title', 'slug', 'description', 'image', 'meta_title', 'meta_description', 'meta_keyword', 'order', 'status'];
}
