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

    @foreach ($data_tarif as $dt)
        <button type="button" class="btn btn-warning float-right editbtn" onclick="show({{ $dt->id_tarif }}) "><i
                class=" fas fas fa-pen"> </i>
            Update
        </button>
    @endforeach


</div>
