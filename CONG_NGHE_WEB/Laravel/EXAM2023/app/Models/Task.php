<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'title',
        'description',
        'assigned_user_id',
        'deadline',
        'status'
    ];
    protected $primaryKey = 'task_id';

    public function project()
    {
        return $this->hasOne(Project::class, 'project_id', 'project_id');
    }

    public function usertask()
    {
        return $this->hasOne(UserTask::class, 'user_id', 'assigned_user_id');
    }
}
