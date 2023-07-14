<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class DepartmentController extends Controller
{
//    public function show($id)
//    {
//        $department = Department::where('id', $id)->first();
//        return view('department.show',compact('department'));
//    }

    public function create()
    {
        $employees = Employee::all();
        return view('department.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => "required",
            'location' => "required",
            'e_id' => "required",
        ]);

        if ($validator->fails()) {
            return redirect(route('department.create'))->with(['error' => "Du lieu nhap vao khong hop le"], 400);
        }

        $existingDepartment = Department::where('e_id', $data['e_id'])->first();
        if ($existingDepartment) {
            return redirect(route('department.create'))->with(['error' => "Nhan vien da la truong phong"], 400);
        }
        $department = Department::create($data);
        if ($department) {
            return redirect(route('home'))->with(['success' => "Them thanh cong"], 200);
        } else {
            return redirect(route('department.create'))->with(['error' => "Them that bai"], 400);
        }
    }

    public function edit($department_id)
    {
        $department = Department::where('department_id', $department_id)->first();
        $employees = Employee::all();
        return view('department.edit', compact('department','employees'));
    }

    public function update(Request $request, $department_id)
    {
        $data = $request->except(['_token', '_method']);

        $validator = Validator::make($data, [
            'name' => "required",
            'location' => "required",
            'e_id' => "required",
            'date_start'=>'required|date',
            'date_end'=>'required|date|after:date_start',
        ]);

        if ($validator->fails()) {
            return redirect(route('department.edit',['department_id'=>$department_id]))->with(['error' => "Du lieu nhap vao khong hop le"], 400);
        }
        $existingDepartment = Department::where('e_id', $data['e_id'])->first();
        if ($existingDepartment) {
            return redirect(route('department.edit',['department_id'=>$department_id]))->with(['error' => "Nhan vien da la truong phong"], 400);
        }
        $department = Department::where('department_id', $department_id);
        if ($department) {
            $department->update($data);
            return redirect(route('home'))->with(['success' => "Sua thanh cong"], 200);
        } else {
            return redirect(route('department.edit',['department_id'=>$department_id]))->with(['error' => "Sua that bai"], 400);
        }
    }

    public function delete($department_id)
    {
        try {
            $department = Department::where('department_id', $department_id)->first();
            if ($department) {
                $department->delete();
                return redirect(route('home'))->with(['success' => "Xoa thanh cong"], 200);
            } else {
                return redirect(route('home'))->with(['error' => "Xoa that bai"], 400);
            }
        } catch (\Exception $e) {
            return redirect(route('home'))->with(['error' => $e->getMessage()], 400);
        }
    }
}
