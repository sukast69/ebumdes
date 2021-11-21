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

    public function update($id_tarif)
    {

        $dataTarif = [
            'nik' => Request()->nik,
            'nama_lengkap' => Request()->nama_lengkap,
            'nomer_hp' => Request()->nomer_hp,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'status_pengguna' => Request()->status_pengguna,
            'alamat_pengguna' => Request()->alamat_pengguna,

        ];

        $this->Pengguna->updateDataTarif($id_tarif, $dataTarif);

        return \response()->json([
            'status' => 200,
            'tarif' => $dataTarif,
        ]);
    }
}