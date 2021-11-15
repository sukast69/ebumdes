<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use GuzzleHttp\Psr7\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->Pengguna = new Pengguna();
    }

    public function index()
    {
        $data = [
            'pengguna_air' => $this->Pengguna->allData(),
        ];

        return view('admin/pengguna_air/v_pengguna_air', $data);
    }

    public function addDataPengguna()
    {
        Request()->validate([
            'nik' => 'required|unique:tb_pengguna_air,nik|min:16|max:16',
            'nama_lengkap' => 'required',
            'nomer_hp' => 'required|min:12|max:13|unique:tb_pengguna_air,nomer_hp',
            'jenis_kelamin' => 'required',
            'alamat_pengguna' => 'required',
            'status_pengguna' => 'required',
        ], [
            'nik.required' => 'NIK wajib diisi !!',
            'nik.unique' => 'NIK sudah terdaftar !!',
            'nik.min' => 'Masukan NIK 16 Karakter !!',
            'nik.max' => 'Masukan NIK max 16 Karakter !!',
            'nama_lengkap.required' => 'Nama wajib diisi !!',
            'nomer_hp.required' => 'Nomer HP wajib diisi !!',
            'nomer_hp.min' => 'nomer hp minimal 12 karakter',
            'nomer_hp.max' => 'nomer hp minimal 13 karakter',
            'nomer_hp.unique' => 'Nomer HP sudah digunakan !!',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi !!',
            'alamat_pengguna.required' => 'Alamat Pengguna wajib diisi !!',
            'status_penggguna.required' => 'Status Penggun awajib diisi !!',

        ]);

        $dataPengguna = [
            'nik' => Request()->nik,
            'nama_lengkap' => Request()->nama_lengkap,
            'nomer_hp' => Request()->nomer_hp,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'status_pengguna' => Request()->status_pengguna,
            'alamat_pengguna' => Request()->alamat_pengguna,

        ];

        $this->Pengguna->addDataPengguna($dataPengguna);

        Alert::success('Sukses', 'Data Berhasil ditambahkan');

        return \redirect()->route('insert');

        // return \view('admin/pengguna_air/v_pengguna_air');
    }

    // public function editDataPengguna($id_pengguna)
    // {
    //     $dataPengguna = [

    //         'pengguna_air' => $this->Pengguna->detailDataPengguna($id_pengguna),
    //     ];

    //     Alert::success('Sukses', 'Data Berhasil diubah');

    //     return \view('admin.pengguna_air.v_pengguna_air', $dataPengguna);
    // }

    // public function updateDataPengguna($id_pengguna)
    // {
    //     Request()->validate([
    //         'nik' => 'required|unique:tb_pengguna_air,nik|min:16|max:16',
    //         'nama_lengkap' => 'required',
    //         'nomer_hp' => 'required|min:12|max:13|unique:tb_pengguna_air,nomer_hp',
    //         'jenis_kelamin' => 'required',
    //         'alamat_pengguna' => 'required',
    //         'status_pengguna' => 'required',
    //     ], [
    //         'nik.required' => 'NIK wajib diisi !!',
    //         'nik.unique' => 'NIK sudah terdaftar !!',
    //         'nik.min' => 'Masukan NIK 16 Karakter !!',
    //         'nik.max' => 'Masukan NIK max 16 Karakter !!',
    //         'nama_lengkap.required' => 'Nama wajib diisi !!',
    //         'nomer_hp.required' => 'Nomer HP wajib diisi !!',
    //         'nomer_hp.min' => 'nomer hp minimal 12 karakter',
    //         'nomer_hp.max' => 'nomer hp minimal 13 karakter',
    //         'nomer_hp.unique' => 'Nomer HP sudah digunakan !!',
    //         'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi !!',
    //         'alamat_pengguna.required' => 'Alamat Pengguna wajib diisi !!',
    //         'status_penggguna.required' => 'Status Penggun awajib diisi !!',

    //     ]);

    //     $dataPengguna = [
    //         'nik' => Request()->nik,
    //         'nama_lengkap' => Request()->nama_lengkap,
    //         'nomer_hp' => Request()->nomer_hp,
    //         'jenis_kelamin' => Request()->jenis_kelamin,
    //         'status_pengguna' => Request()->status_pengguna,
    //         'alamat_pengguna' => Request()->alamat_pengguna,

    //     ];

    //     $this->Pengguna->editDataPengguna($id_pengguna, $dataPengguna);

    //     Alert::success('Sukses', 'Data Berhasil dirubah');

    //     return \redirect()->route('insert');

    // }

    // public function edit(Request $request, $id_pengguna)
    // {
    //     if ($request->isMethod('post')) {

    //         $data = $request->all();

    //         Pengguna::where(['id_pengguna', $id_pengguna])->update([
    //             'nik' => $data['nik'],
    //             'nama_lengkap' => $data['nama_lengkap'],
    //             'nomer_hp' => $data['nomer_hp'],
    //             'jenis_kelamin' => $data['jenis_kelamin'],
    //             'status_pengguna' => $data['status_pengguna'],
    //             'alamat_pengguna' => $data['alamat_pengguna'],
    //         ]);

    //         return \redirect()->back();

    //     }

    // }

    public function update(Request $request)
    {
        \dd($request->all());

    }
}