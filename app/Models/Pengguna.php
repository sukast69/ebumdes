<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengguna extends Model
{

    public function allData()
    {
        return DB::table('tb_pengguna_air')->get();
    }

    public function addDataPengguna($dataPengguna)
    {
        return DB::table('tb_pengguna_air')->insert($dataPengguna);
    }
    public function detailDataPengguna($id_pengguna)
    {
        return DB::table('tb_pengguna_air')->where('id_pengguna', $id_pengguna)->first();
    }

    public function updateDataPengguna($id_pengguna, $data)
    {
        DB::table('tb_pengguna_air')->where('id_pengguna', $id_pengguna)->update($data);
    }

    public function deleteDataPengguna($id_pengguna)
    {
        DB::table('tb_pengguna_air')->where('id_pengguna', $id_pengguna)->delete();
    }
}