@extends('layouts/admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Update an Employee Profile</h1>
    </div>
</div>
<div class="row">
    <form action="{{ route('employees.update', $employee -> id) }}" method="Post">
      @method('put')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="FullName" class="form-label">FullName</label>
            <input type="text" class="form-control" id="FullName" name="FullName" aria-describedby="FullName" value="{{ $employee -> FullName }}">
        </div>
        <div class="mb-3">
            <label for="JobTitle" class="form-label">JobTitle</label>
            <input type="text" class="form-control" id="JobTitle" name="JobTitle" aria-describedby="JobTitle" value="{{ $employee -> JobTitle }}">
        </div>
        <div class="mb-3">
            <label for="Department" class="form-label">Department</label>
            <input type="text" class="form-control" id="Department" name="Department" aria-describedby="Department" value="{{ $employee -> Department }}">
        </div>
        <div class="mb-3">
            <label for="Gender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="Gender" name="Gender" aria-describedby="Gender" value="{{ $employee -> Gender }}">
        </div>
        <div class="mb-3">
            <label for="Salary" class="form-label">Salary</label>
            <input type="text" class="form-control" id="Salary" name="Salary" aria-describedby="Salary" value="{{ $employee -> Salary }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection