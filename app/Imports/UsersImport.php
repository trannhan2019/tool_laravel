<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new User([
            'name' => $row['name'],
            'username' => $row['username'],
            'password' => Hash::make('123456'),
            'isActive' => 1,
            'location' => $row['location'],
            'role_id' => $row['role_id'],
            'department_id' => $row['department_id'],
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
