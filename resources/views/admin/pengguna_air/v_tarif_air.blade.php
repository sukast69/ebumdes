@extends('layouts.admin.master')
@section('title', 'Tarif Air')
@section('content')
    <div class="content">


        <div class="page-inner mt--5">
            <div class="card">
                <div class="card-header">

                    <a href="" class="btn btn-success btn-sm"><i class="fas fa-file-excel "></i></a>
                    <a href="" class="btn btn-danger btn-sm"><i class="fas fas fa-file-pdf "></i></a>
                    <a href="" class="btn btn-primary btn-sm"><i class="fas fa-sync "></i></a>
                </div>
                <div class="card-body ">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Range Pemakaian</th>
                                        <th>Biaya Tarif Per-M3</th>
                                        <th>Biaya Pemeliharaan</th>
                                        <th>Biaya Administrasi</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        @foreach ($data_tarif as $dt)
                                            <td>1</td>
                                            <td>{{ $dt->r_a_awal }} - {{ $dt->r_a_akhir }}</td>
                                            <td>{{ $dt->r_a_biaya }}</td>
                                            <td>{{ $dt->biaya_admin }}</td>
                                            <td>{{ $dt->biaya_service }}</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        @foreach ($data_tarif as $dt)
                                            <td>2</td>
                                            <td>{{ $dt->r_b_awal }} - {{ $dt->r_b_akhir }}</td>
                                            <td>{{ $dt->r_b_biaya }}</td>
                                            <td>{{ $dt->biaya_admin }}</td>
                                            <td>{{ $dt->biaya_service }}</td>

                                        @endforeach
                                    </tr>
                                    <tr>
                                        @foreach ($data_tarif as $dt)
                                            <td>3</td>
                                            <td>{{ $dt->r_c_awal }} - {{ $dt->r_c_akhir }}</td>
                                            <td>{{ $dt->r_c_biaya }}</td>
                                            <td>{{ $dt->biaya_admin }}</td>
                                            <td>{{ $dt->biaya_service }}</td>

                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="card-footer ">
                        {{-- <a href="#" class="btn btn-warning btn-xs editbtntarif float-right">
                            <i class="fas fa-pen"></i>Perbarui
                        </a> --}}
                        @foreach ($data_tarif as $dt)
                            <button type="button" class="btn btn-warning float-right editbtn"
                                value="{{ $dt->id_tarif }}"><i class="fas fas fa-pen"> </i>
                                Update
                            </button>
                        @endforeach


                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- modal edit tarif air --}}

    <div class="modal fade bd-example-modal-lg mt-5" id="modalUpdateTarifAir" tabindex="-1" role="dialog"
        aria-labelledby="bd-example-modal-lg" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Perbarui data tarif</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ url('tarif_air/update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id_tarif" id="id_tarif">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Range A</label>
                                    <small id="" class="form-text text-muted">Meter Awal</small>
                                    <input type="number" class="form-control input-square" id="edit_r_a_awal"
                                        name="r_a_awal" placeholder="Meteran Awal">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">-</label>
                                    <small id="r_a_akhir" class="form-text text-muted">Meteran Akhir</small>
                                    <input type="number" class="form-control input-square" id="edit_r_a_akhir"
                                        name="r_a_akhir" placeholder="Meteran Akhir">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">-</label>
                                    <small id="" class="form-text text-muted">Biaya per-M<sup>3</sup></small>
                                    <input type="number" class="form-control input-square" id="edit_r_a_awal"
                                        name="r_a_awal" placeholder="Biaya ">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Range B</label>
                                    <small class="form-text text-muted">Meter Awal</small>
                                    <input type="number" class="form-control input-square" id="edit_r_b_awal"
                                        name="r_b_awal" placeholder="Meteran Awal">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">-</label>
                                    <small class="form-text text-muted">Meteran Akhir</small>
                                    <input type="number" class="form-control input-square" id="edit_r_b_akhir"
                                        name="r_b_akhir" placeholder="Meteran Akhir">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">-</label>
                                    <small class="form-text text-muted">Biaya per-M<sup>3</sup></small>
                                    <input type="number" class="form-control input-square" id="edit_r_b_biaya"
                                        name="r_b_biaya" placeholder="Biaya">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Range C</label>
                                    <small class="form-text text-muted">Meter Awal</small>
                                    <input type="number" class="form-control input-square" d="edit_r_b_awal" name="r_b_awal"
                                        placeholder="Meteran Awal">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">-</label>
                                    <small class="form-text text-muted">Meteran Akhir</small>
                                    <input type="number" class="form-control input-square" id="edit_r_c_akhir"
                                        name="r_c_akhir" placeholder="Meteran Akhir">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">-</label>
                                    <small class="form-text text-muted">Biaya per-M<sup>3</sup></small>
                                    <input type="number" class="form-control input-square" id="edit_r_c_biaya"
                                        name="r_c_biaya" placeholder="Biaya">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <small class="form-text text-muted">Biaya Administrasi</small>
                                    <input type="number" class="form-control input-square" id="edit_biaya_admin"
                                        name="biaya_admin" placeholder="Meteran Awal">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <small id="r_b_akhir" class="form-text text-muted">Biaya Pemeliharaan </small>
                                    <input type="number" class="form-control input-square" id="edit_biaya_service"
                                        name="biaya_service" placeholder="Meteran Akhir">
                                </div>
                            </div>

                        </div>


                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"> <i class="fas fa-save mr-2"></i> Perbarui
                    </button>
                </div>


            </div>
        </div>


    @endsection
