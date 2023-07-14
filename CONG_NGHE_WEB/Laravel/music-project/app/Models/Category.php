<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'theloai';
    protected $fillable = ['ma_tloai', '']
    use HasFactory;
}
