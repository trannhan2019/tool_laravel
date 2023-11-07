<?php

namespace App\Http\Controllers;

use App\Imports\CompaniesImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DepartmentsImport;
use App\Imports\RolesImport;
use App\Imports\UsersImport;

class DataController extends Controller
{
    public function company(Request $request)
    {
        Excel::import(new CompaniesImport, $request->file('company'));
        return response()->json('done');
    }

    public function department(Request $request)
    {
        Excel::import(new DepartmentsImport, $request->file('department'));
        return response()->json('done');
    }

    public function role(Request $request)
    {
        Excel::import(new RolesImport, $request->file('role'));
        return response()->json('done');
    }

    public function user(Request $request)
    {
        Excel::import(new UsersImport, $request->file('user'));
        return response()->json('done');
    }
}
