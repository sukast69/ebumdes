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
                    <div class="card-body text-center">
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
                        <a href="" class="btn btn-warning btn-sm float-right ">Update<i class="fas fas fa-pen ml-2">
                            </i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
