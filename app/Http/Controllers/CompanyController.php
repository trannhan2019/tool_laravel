<?php

namespace App\Http\Controllers;

use App\Imports\CompaniesImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function store(Request $request)
    {
        Excel::import(new CompaniesImport, $request->file('company'));
        return response()->json('done');

    }
}
