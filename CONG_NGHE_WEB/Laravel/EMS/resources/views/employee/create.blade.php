@extends('layouts.base')
@section('main-content')
    <div class="container" >
        <div class="wrapper" style="width: 600px; margin: 0 auto; padding-top: 40px">
            <div class="container-fluid" style="background-color: #fff; border-radius: 5px">
                <div class="row" >
                    <div class="col-md-12" >
                        <h2 class="mt-5">Create Employee</h2>
                        <p>Please fill this form and submit to add employee record to the database.</p>

                        <form action="{{route('employee.store')}}" method="post">
                            @csrf
                            <div class="mb-3 col">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3 col">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" id="address" name="address" class="form-control" required>
                            </div>

                            <div class="mb-3 col">
                                <label for="salary" class="form-label">Salary</label>
                                <input type="text" id="salary" name="salary" class="form-control" required>
                            </div>
                            <div  style="padding-bottom: 30px">
                                <button class="btn btn-success">Create</button>
                                <a href="http://127.0.0.1:8000/" class="btn btn-secondary ml-2">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


