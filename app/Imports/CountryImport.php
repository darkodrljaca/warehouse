<?php

namespace App\Imports;

use App\Models\ModelImport\CountryImportModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CountryImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CountryImportModel([
            'name' => $row['name'],
            'user_id' => $row['user_id'],
        ]);
    }
}
