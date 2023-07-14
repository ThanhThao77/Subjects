<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'location',
      'e_id'
    ];
    protected $primaryKey = 'department_id';

    public function employee()
    {
        return $this->hasOne(Employee::class, 'e_id', 'e_id');
    }
}
