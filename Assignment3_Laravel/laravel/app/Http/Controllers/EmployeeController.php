<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\Support\Facades\Session;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employees.index', ['employees' => Employee::all()]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create', ['employees' => Employee::all()]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $employee = Employee::create($request->validated());
        Session::flash('success', 'Employee added successfully');
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());
        return redirect()->route('employees.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        Employee::Destroy($id);
        Session::Flash('success', 'Employee trashed successfully');
        return redirect()->route('employees.index');
    }

    public function destroy($id)
    {
        $employee = Employee::withTrashed()->where('id', $id)->first();
        $employee->forceDelete();
        Session::Flash('success', 'Employee deleted successfully');
        return redirect()->route('employees.index');
    }

    public function restore($id)
    {
        $employee = Employee::withTrashed()->where('id', $id)->first();
        $employee->restore();
        Session::Flash('success', 'Employee restored successfully');
        return redirect()->route('employees.trashed');
    }
}
