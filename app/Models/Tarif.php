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
}