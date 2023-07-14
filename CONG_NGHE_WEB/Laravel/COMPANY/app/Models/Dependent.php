<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    use HasFactory;
    protected  $fillable = [
      'd_name',
      'gender',
      'relationship',
      'e_id'
    ];
    protected $primaryKey = 'id';
}
