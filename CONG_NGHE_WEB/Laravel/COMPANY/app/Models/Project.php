<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
//    public $timestamps=false;
    protected $fillable = [
      'name',
      'location',
      'department_id',
      'e_id'
    ];
    protected $primaryKey = 'p_id';
}
