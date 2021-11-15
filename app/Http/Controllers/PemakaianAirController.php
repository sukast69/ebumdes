<?php

namespace App\Http\Controllers;

class PemakaianAirController extends Controller
{
    public function addDataPemakaianAir()
    {
        return \view('admin.pengguna_air.v_pemakaian_air');

    }
}