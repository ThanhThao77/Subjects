<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
      'title',
      'post_name',
      'category_id',
      'summary',
      'content',
      'author_id',
      'img'
    ];
    protected $primaryKey = 'post_id';
}
