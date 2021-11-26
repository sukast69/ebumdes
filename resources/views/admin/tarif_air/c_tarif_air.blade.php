<form action="{{ url('tarif_air/update') }}" method="POST">
    @csrf
    <input type="hidden" name="id_tarif" id="id_tarif">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Range A</label>
                <small id="" class="form-text text-muted">Meter Awal</small>
                <input type="number" class="form-control input-square" id="edit_r_a_awal" name="r_a_awal"
                    placeholder="Meteran Awal">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">-</label>
                <small id="r_a_akhir" class="form-text text-muted">Meteran Akhir</small>
                <input type="number" class="form-control input-square" id="edit_r_a_akhir" name="r_a_akhir"
                    placeholder="Meteran Akhir">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">-</label>
                <small id="" class="form-text text-muted">Biaya per-M<sup>3</sup></small>
                <input type="number" class="form-control input-square" id="edit_r_a_awal" name="r_a_awal"
                    placeholder="Biaya ">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Range B</label>
                <small class="form-text text-muted">Meter Awal</small>
                <input type="number" class="form-control input-square" id="edit_r_b_awal" name="r_b_awal"
                    placeholder="Meteran Awal">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">-</label>
                <small class="form-text text-muted">Meteran Akhir</small>
                <input type="number" class="form-control input-square" id="edit_r_b_akhir" name="r_b_akhir"
                    placeholder="Meteran Akhir">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">-</label>
                <small class="form-text text-muted">Biaya per-M<sup>3</sup></small>
                <input type="number" class="form-control input-square" id="edit_r_b_biaya" name="r_b_biaya"
                    placeholder="Biaya">
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
                <input type="number" class="form-control input-square" id="edit_r_c_akhir" name="r_c_akhir"
                    placeholder="Meteran Akhir">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">-</label>
                <small class="form-text text-muted">Biaya per-M<sup>3</sup></small>
                <input type="number" class="form-control input-square" id="edit_r_c_biaya" name="r_c_biaya"
                    placeholder="Biaya">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">

                <small class="form-text text-muted">Biaya Administrasi</small>
                <input type="number" class="form-control input-square" id="edit_biaya_admin" name="biaya_admin"
                    placeholder="Meteran Awal">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">

                <small id="r_b_akhir" class="form-text text-muted">Biaya Pemeliharaan </small>
                <input type="number" class="form-control input-square" id="edit_biaya_service" name="biaya_service"
                    placeholder="Meteran Akhir">
            </div>
        </div>

    </div>


</form>
