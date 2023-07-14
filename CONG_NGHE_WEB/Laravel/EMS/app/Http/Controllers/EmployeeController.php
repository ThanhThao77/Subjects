<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => "required",
            'address' => "required",
            'salary' => "required|max:10",
        ]);
        if ($validator->fails()) {
            return redirect(route('home'));
        }
        $employee = Employee::create($data);
        if ($employee) {
            return redirect(route('home'));
        } else {
            return redirect(route('home'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee= Employee::where('id', $id)->first();
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee= Employee::where('id', $id)->first();
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except(['_token','_method']);

        $validator = Validator::make($data, [
            'name' => "required",
            'address' => "required",
            'salary' => "required|max:10",
        ]);

        if ($validator->fails()) {
            return redirect(route('home'));
        }

        $employee = Employee::where('id',$id);
        if ($employee) {
            $employee->update($data);
            return redirect(route('home'));
        } else {
            return redirect(route('home'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try {
            $employee = Employee::where('id',$id)->first();
            if ($employee) {
                $employee->delete();
                return redirect(route('home'));
            }
            else {
                return redirect(route('home'));
            }
        }
        catch (\Exception $e) {
            return redirect(route('home'));
        }
    }
}
