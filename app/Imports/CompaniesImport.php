<?php

namespace App\Imports;

use App\Models\Company;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CompaniesImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */


    public function model(array $row)
    {
        return new Company([
            'name' => $row['name'],
            'alias' => $row['alias'],
            'isActive' => 1,
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
