<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelRak extends Model
{
    public function allData()
    {
       return DB::table('tbl_rak')->get();
    }

    public function detailData($id_rak)
    {
        return DB::table('tbl_rak')->where('id_rak', $id_rak)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_rak')->insert($data);
    }

    public function editData($id_rak ,$data)
    {
        DB::table('tbl_rak')
        ->where('id_rak', $id_rak)
        ->update($data);
    }

    public function deleteData($id_rak)
    {
        DB::table('tbl_rak')
        ->where('id_rak', $id_rak)
        ->delete();
    }

        
}