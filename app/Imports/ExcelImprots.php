<?php

namespace App\Imports;

use App\Category_Product;
use Maatwebsite\Excel\Concerns\ToModel;

class Imports implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Category_Product([
            'category_name' => $row[0],
            'category_desc' => $row[1],
            'category_status' => $row[2],
        ]);
    }
}