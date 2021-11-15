<?php

namespace App\Http\Controllers;

use App\Models\Tarif;

class TarifAirController extends Controller
{
    public function __construct()
    {
        $this->Tarif = new Tarif();
    }

    public function index()
    {
        $data = [
            'data_tarif' => $this->Tarif->allDataTarif(),
        ];

        return view('admin/pengguna_air/v_tarif_air', $data);
    }
}