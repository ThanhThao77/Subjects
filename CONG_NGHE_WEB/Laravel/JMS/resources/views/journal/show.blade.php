@extends('layouts.base')
@section('main-content')
    <div class="container" >
        <div class="wrapper" style="width: 600px; margin: 0 auto; padding-top: 40px">
            <div class="container-fluid" style="background-color: #fff; border-radius: 5px">
                <div class="row" >
                    <div class="col-md-12" >
                        <h2 class="mt-5">Journal Details</h2>
{{--                        <p>Please fill this form and submit to add journal record to the database.</p>--}}

                        <form action="{{route('journal.store')}}" method="post">
                            @csrf
                            <div class="mb-3 col">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" id="title" name="title" class="form-control" readonly>
                            </div>

                            <div class="mb-3 col">
                                <label for="editor" class="form-label">Editor</label>
                                <input type="text" id="editor" name="editor" class="form-control" readonly>
                            </div>

                            <div class="mb-3 col">
                                <label for="issn" class="form-label">ISSN</label>
                                <input type="text" id="issn" name="issn" class="form-control" readonly>
                            </div>

                            <div class="mb-3 col">
                                <label for="publicationDate" class="form-label">ISSN</label>
                                <input type="date" id="publicationDate" name="publicationDate" class="form-control" readonly>
                            </div>
                            <div  style="padding-bottom: 30px">
{{--                                <button class="btn btn-success">Create</button>--}}
                                <a href="http://127.0.0.1:8000/" class="btn btn-secondary ml-2">Exit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

