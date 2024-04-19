@extends('layouts/admin')@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Employee Profile</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $employee->FullName }} {{ $$employee->JobTitle }} {{ $employee->Department }}</h5>
                    <a href="{{ route('students.edit', $employee->id) }}" class="card-link">Edit</a>
                    <a href="{{ route('students.trash', $employee->id) }}" class="card-link">Delete</a>
            </div>
        </div>
    </div>
</div>
@endsection