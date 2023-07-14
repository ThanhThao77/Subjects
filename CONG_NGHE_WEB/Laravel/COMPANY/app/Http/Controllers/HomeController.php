<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getAllDepartments()
    {
        $departments = Department::orderBy('department_id','desc')->get();
        return view('home',compact('departments'));
    }
}
//relationship laravel
