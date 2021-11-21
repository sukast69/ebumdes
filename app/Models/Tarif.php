<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tarif extends Model
{

    public function allDataTarif()
    {
        return DB::table('tb_tarif_air')->get();
    }

    public function updateDataTarif($id_tarif, $data)
    {
        DB::table('tb_tarif_air')->where('id_tarif', $id_tarif)->update($data);
    }
}