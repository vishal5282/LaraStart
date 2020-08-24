@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    <h3>User Dashboard</h3>
                   
                    <a href="/students/create" class="btn btn-primary">Add Detail</a>&nbsp;&nbsp;
                    <a href="/students" class="btn btn-primary">Show Students List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
