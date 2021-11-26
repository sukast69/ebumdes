<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

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

        toast('Data Berhasil ditambahkan', 'success');

        return \redirect()->route('pengguna');

        // return \view('admin/pengguna_air/v_pengguna_air');
    }

    public function update($id_pengguna)
    {
        Request()->validate([
            'nik' => 'required|min:16|max:16',
            'nama_lengkap' => 'required',
            'nomer_hp' => 'required|min:12|max:13',
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

        $this->Pengguna->updateDataPengguna($id_pengguna, $dataPengguna);

        // Alert::success('Sukses', 'Data berhasil diubah');

        toast('Data berhasil diubah', 'success');

        return \redirect()->route('pengguna');

    }

    public function delete($id_pengguna)
    {
        $this->Pengguna->deleteDataPengguna($id_pengguna);

        toast('Data Berhasil dihapus', 'warning');

        return \redirect()->route('pengguna');

    }

    // public function update(Request $request, $id_pengguna)
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

    //     $pgn = Pengguna::find($id_pengguna);

    //     $pgn->edit_nik = $request->input('nik');
    //     $pgn->edit_nama_lengkap = $request->input('nama_lengkap');
    //     $pgn->edit_nomer_hp = $request->input('nomer_hp');
    //     $pgn->edit_jenis_kelamin = $request->input('jenis_kelamin');
    //     $pgn->edit_alamat_pengguna = $request->input('alamat_pengguna');
    //     $pgn->edit_status_pengguna = $request->input('status_pengguna');

    //     $pgn->save();
    //     Alert::success('Sukses', 'Data Berhasil dirubah');

    //     return \redirect('/pengguna_air');

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

    // public function update(Request $request)
    // {
    //     \dd($request->all());

    // }

    // public function update(Request $request)
    // {
    //     $pgn = Pengguna::findOrFail($request->id_pengguna);

    //     $pgn->nama_pengguna = $request->nama_pengguna;
    //     $pgn->nik = $request->nik;
    //     $pgn->nomer_hp = $request->nomer_hp;
    //     $pgn->jenis_kelamin = $request->jenis_kelamin;
    //     $pgn->status_pengguna = $request->status_pengguna;
    //     $pgn->alamat_pengguna = $request->nama_pengalamat_pengguna;

    //     $pgn->save();

    //     return \back();

    // }

    // public function update(Request $request, $id_pengguna)
    // {
    //     $this->validate($request, [
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

    //     $pgn = Pengguna::find($id_pengguna);

    //     $pgn->nama_pengguna = $request->input('nama_pengguna');
    //     $pgn->nik = $request->input('nik');
    //     $pgn->nomer_hp = $request->input('nomer_hp');
    //     $pgn->jenis_kelamin = $request->input('jenis_kelamin');
    //     $pgn->status_pengguna = $request->input('status_pengguna');
    //     $pgn->alamat_pengguna = $request->input('alamat_pengguna');

    //     $pgn->save();

    //     return \redirect('/pengguna_air');

    // }

    // public function delete($id_pengguna)
    // {
    //     $pgn = Pengguna::find($id_pengguna);
    //     $pgn = delete();

    //     return \redirect('/pengguna_air');
    // }

}