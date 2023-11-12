<?php

namespace App\Imports;

use App\Models\CategoryBook;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CategoryBooksImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CategoryBook([
            'name' => $row['name'],
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
