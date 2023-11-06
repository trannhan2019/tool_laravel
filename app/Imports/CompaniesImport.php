<?php

namespace App\Imports;

use App\Models\Company;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\ToCollection;

class CompaniesImport implements ToModel,WithHeadingRow
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

    // public function collection(Collection $rows)
    // {
    //     foreach ($rows as $row)
    //     {
    //         Company::create([
    //             'name' => $row[0],
    //             'alias' => $row[1],
    //             'isActive' => $row[2],
    //         ]);
    //     }
    // }
}
