<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelPengembalian extends Model
{
    public function allData()
    {
       return DB::table('tbl_pengembalian')->get();
    }

    public function detailData($id_pengembalian)
    {
        return DB::table('tbl_pengembalian')->where('id_pengembalian', $id_pengembalian)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_pengembalian')->Insert($data);
    }

    public function editData($id_pengembalian ,$data)
    {
        DB::table('tbl_pengembalian')
        ->where('id_pengembalian', $id_pengembalian)
        ->update($data);
    }

    public function deleteData($id_pengembalian)
    {
        DB::table('tbl_pengembalian')
        ->where('id_pengembalian', $id_pengembalian)
        ->delete();
    }

        
}