<?php

namespace App\Http\Controllers;

use App\Imports\CompaniesImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DepartmentsImport;
use App\Imports\RolesImport;
use App\Imports\UsersImport;
use App\Imports\CategoryBooksImport;
use App\Imports\BooksImport;

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

    public function cate_book(Request $request)
    {
        Excel::import(new CategoryBooksImport, $request->file('category_book'));
        return response()->json('done');
    }

    public function book(Request $request)
    {
        Excel::import(new BooksImport, $request->file('book'));
        return response()->json('done');
    }
}
