<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\DepartmentsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function store(Request $request)
    {
        Excel::import(new DepartmentsImport, $request->file('department'));
        return response()->json('done');

    }
}
