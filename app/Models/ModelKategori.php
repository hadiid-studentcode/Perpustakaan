<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelKategori extends Model
{


    protected $fillable = [
        'kategori'
    ];

    protected $primaryKey = 'id';
    protected $table = 'tbl_kategori';


    public function allData()
    {
       return DB::table('tbl_kategori')->get();
    }

    public function detailData($id_kategori)
    {
        return DB::table('tbl_kategori')->where('id', $id_kategori)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_kategori')->insert($data);
    }

    public function editData($id_kategori ,$data)
    {
        DB::table('tbl_kategori')
        ->where('id', $id_kategori)
        ->update($data);
    }

    public function deleteData($id_kategori)
    {
        DB::table('tbl_kategori')
        ->where('id', $id_kategori)
        ->delete();
    }

        
}