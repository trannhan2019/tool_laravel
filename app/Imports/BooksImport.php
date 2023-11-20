<?php

namespace App\Imports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BooksImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Book([
            'title' => $row['title'],
            'author' => $row['author'],
            'quantity' => $row['quantity'],
            'description' => $row['description'],
            'code' => $row['code'],
            'storage_location' => $row['storage_location'],
            'more_info' => $row['more_info'],            
            'category_book_id' => $row['category_book_id'],
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
