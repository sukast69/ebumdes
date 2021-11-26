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

        $dataTarif = Tarif::find($id_tarif);

        return response()->json([
            'status' => 200,
            'tarif' => $dataTarif,

        ]);
    }

    public function show($id_tarif)
    {
        $data = Tarif::findOrFail($id_tarif);
        return view('tarif_air')->with([
            'data' => $data,
        ]);
    }
}