<?php

namespace App\Imports;

use App\Models\Department;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DepartmentsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Department([
            'name' => $row['name'],
            'alias' => $row['alias'],
            'isActive' => $row['isActive'],
            'location'=>$row['location'],
            'company_id'=>$row['company_id'],
        ]);
    }
}
