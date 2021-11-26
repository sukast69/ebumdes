<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Http\Request;

class TarifAir2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \view('admin/tarif_air/v_tarif_air');
    }

    public function read()
    {
        $data = Tarif::all();
        return \view('admin/tarif_air/r_tarif_air')->with(
            [
                'data_tarif' => $data,
            ]
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/tarif_air/c_tarif_air');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_tarif)
    {
        $data = Tarif::findOrFail($id_tarif);
        return \view('admin/tarif_air/e_tarif_air')->with(
            [
                'data_tarif' => $data,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tarif)
    {
        $data = Tarif::findOrFail($id_tarif);

        $data->r_a_awal = $request->r_a_awal;
        $data->r_a_akhir = $request->r_a_akhir;
        $data->r_a_biaya = $request->r_a_biaya;

        $data->r_b_awal = $request->r_b_awal;
        $data->r_b_akhir = $request->r_b_akhir;
        $data->r_b_biaya = $request->r_b_biaya;

        $data->r_c_awal = $request->r_c_awal;
        $data->r_c_akhir = $request->r_c_akhir;
        $data->r_c_biaya = $request->r_c_biaya;

        $data->biaya_admin = $request->biaya_admin;
        $data->biaya_service = $request->biaya_service;

        $data->save();

        // return \view('admin/tarif_air/v_tarif_air')->with('success', 'tarif air berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}