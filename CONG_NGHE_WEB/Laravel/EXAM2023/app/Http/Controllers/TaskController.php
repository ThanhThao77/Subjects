<?php

namespace App\Http\Controllers;
use App\Modes\UserTask;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Task;

class TaskController extends Controller
{
    public function create()
    {
        $projects = Project::all();
        $user_tasks = UserTask::all();
        return view('task.create', compact('projects', 'user_tasks'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'project_id' => "required",
            'title' => "required",
            'description' => "required",
            'assigned_user_id' => "required",
            'deadline' => "required",
            'status' => "required",
        ]);

        if ($validator->fails()) {
            return redirect(route('task.create'))->with(['error' => "Du lieu nhap vao khong hop le"], 400);
        }

        $existingDepartment = Task::where('project_id', $data['project_id'])->first();
        if ($existingDepartment) {
            return redirect(route('task.create'))->with(['error' => "Du an da ton tai"], 400);
        }

        $existingDepartment = Task::where('assigned_user_id', $data['assigned_user_id'])->first();
        if ($existingDepartment) {
            return redirect(route('task.create'))->with(['error' => "Nguoi dung da ton tai"], 400);
        }

        $task = Task::create($data);
        if ($task) {
            return redirect(route('home'))->with(['success' => "Them thanh cong"], 200);
        } else {
            return redirect(route('task.create'))->with(['error' => "Them that bai"], 400);
        }
    }

    public function edit($department_id)
    {
//        $department = Department::where('department_id', $department_id)->first();
//        $employees = Employee::all();
//        return view('department.edit', compact('department','employees'));
    }

    public function update(Request $request, $department_id)
    {
//        $data = $request->except(['_token', '_method']);
//
//        $validator = Validator::make($data, [
//            'name' => "required",
//            'location' => "required",
//            'e_id' => "required",
//            'date_start'=>'required|date',
//            'date_end'=>'required|date|after:date_start',
//        ]);
//
//        if ($validator->fails()) {
//            return redirect(route('department.edit',['department_id'=>$department_id]))->with(['error' => "Du lieu nhap vao khong hop le"], 400);
//        }
//        $existingDepartment = Department::where('e_id', $data['e_id'])->first();
//        if ($existingDepartment) {
//            return redirect(route('department.edit',['department_id'=>$department_id]))->with(['error' => "Nhan vien da la truong phong"], 400);
//        }
//        $department = Department::where('department_id', $department_id);
//        if ($department) {
//            $department->update($data);
//            return redirect(route('home'))->with(['success' => "Sua thanh cong"], 200);
//        } else {
//            return redirect(route('department.edit',['department_id'=>$department_id]))->with(['error' => "Sua that bai"], 400);
//        }
    }

    public function delete($task_id)
    {
        try {
            $task = Task::where('task_id', $task_id)->first();
            if ($task) {
                $task->delete();
                return redirect(route('home'))->with(['success' => "Xoa thanh cong"], 200);
            } else {
                return redirect(route('home'))->with(['error' => "Xoa that bai"], 400);
            }
        } catch (\Exception $e) {
            return redirect(route('home'))->with(['error' => $e->getMessage()], 400);
        }
    }
}
