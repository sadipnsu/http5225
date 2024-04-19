@extends('layouts/admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Add an Employee</h1>
    </div>
</div>
<div class="row">
    <form action="{{ route('employees.store') }}" method="post">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif{{ csrf_field() }}
        <div class="mb-3">
            <label for="FullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="FullName" name="FullName" aria-describedby="FullName">
        </div>
        <div class="mb-3">
            <label for="JobTitle" class="form-label">JobTitle</label>
            <input type="text"class="form-control" id="JobTitle" name="JobTitle" aria-describedby="JobTitle">
        </div>
        <div class="mb-3">
            <label for="Department" class="form-label">Department</label>
            <input type="text"class="form-control" id="Department" name="Department" aria-describedby="Department">
        </div>
        <div class="mb-3">
            <label for="Gender" class="form-label">Gender</label>
            <input type="text"class="form-control" id="Gender" name="Gender" aria-describedby="Gender">
        </div>
        <div class="mb-3">
            <label for="Salary" class="form-label">Salary</label>
            <input type="text"class="form-control" id="Salary" name="Salary" aria-describedby="Salary">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection