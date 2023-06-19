<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Position;

class EmployeeController extends Controller
{

    public function index()
    {
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }


    public function show(string $id)
    {
        $pageTitle = 'Employee Detail';

        // ELOQUENT
        $employee = Employee::find($id);

        return view('employee.show', compact('pageTitle', 'employee'));
    }

    public function edit(string $id)
    {
    }


    public function update(Request $request, string $id)
    {
    }


    public function destroy(string $id)
    {
        // ELOQUENT
        Employee::find($id)->delete();

        return redirect()->route('employees.index');
    }
}
