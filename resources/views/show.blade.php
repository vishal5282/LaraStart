@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-right">
        <div class="col-md-6 col-lg-12 col-sm-6">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Session::has("studentAdd"))
                    <div class="alert alert-success">
                        {{Session::get('studentAdd')}}
                    </div>
                    @endif

                    <a href="/students/create" class="btn btn-primary">Add Detail
                    </a>&nbsp;&nbsp;&nbsp;<a href="/home" class="btn btn-primary">Back to home</a>
                    @if(count ($students) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>email</th>
                                <th>password</th>
                                <th>mobile</th>
                                <th>date</th>
                                <th>gender</th>
                                <th>city</th>
                                <th>file</th>
                                <th>photo</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->password}}</td>
                            <td>{{$student->date}}</td>
                            <td>{{$student->gender}}</td>
                            <td>{{$student->city}}</td>
                            <td>{{$student->file_upload}}</td>
                            <td>{{$student->photo_upload}}</td>
                            <td><a href="/students/{{$student->id}}/edit" class="btn btn-warning">Edit</a></td>
                            <td>
                                 <form action="/students/{{$student->id}} " method="POST">
                                @csrf
                                @method("DELETE")
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$students->links()}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
