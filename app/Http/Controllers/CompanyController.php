<?php

namespace App\Http\Controllers;

use App\Imports\CompaniesImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function fileImport(Request $request)
    {
        // $companies = Excel::import(new CompaniesImport, $request->file('company'));
        $collection = Excel::toCollection(new CompaniesImport, $request->file('company'));
        return response()->json($collection);
    }
}
