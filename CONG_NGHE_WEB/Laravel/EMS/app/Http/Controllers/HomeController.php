<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getAllEmployees()
    {
        $employees = Employee::orderBy('created_at', 'DESC')->paginate(10);
        return view('home', compact('employees'));
    }
}
