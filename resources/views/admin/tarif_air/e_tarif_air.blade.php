<input type="hidden" name="id_tarif" id="id_tarif">
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Range A</label>
            <small id="" class="form-text text-muted">Meter Awal</small>
            <input type="number" class="form-control input-square" id="edit_r_a_awal" name="r_a_awal"
                value="{{ $data_tarif->r_a_awal }}" placeholder="Meteran Awal">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">-</label>
            <small id="r_a_akhir" class="form-text text-muted">Meteran Akhir</small>
            <input type="number" class="form-control input-square" id="edit_r_a_akhir" name="r_a_akhir"
                value="{{ $data_tarif->r_a_akhir }}" placeholder="Meteran Akhir">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">-</label>
            <small id="" class="form-text text-muted">Biaya per-M<sup>3</sup></small>
            <input type="number" class="form-control input-square" id="edit_r_a_biaya" name="r_a_biaya"
                value="{{ $data_tarif->r_a_biaya }}" placeholder="Biaya ">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Range B</label>
            <small class="form-text text-muted">Meter Awal</small>
            <input type="number" class="form-control input-square" id="edit_r_b_awal" name="r_b_awal"
                value="{{ $data_tarif->r_b_awal }}" placeholder="Meteran Awal">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">-</label>
            <small class="form-text text-muted">Meteran Akhir</small>
            <input type="number" class="form-control input-square" id="edit_r_b_akhir" name="r_b_akhir"
                value="{{ $data_tarif->r_b_akhir }}" placeholder="Meteran Akhir">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">-</label>
            <small class="form-text text-muted">Biaya per-M<sup>3</sup></small>
            <input type="number" class="form-control input-square" id="edit_r_b_biaya" name="r_b_biaya"
                value="{{ $data_tarif->r_b_biaya }}" placeholder="Biaya">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Range C</label>
            <small class="form-text text-muted">Meter Awal</small>
            <input type="number" class="form-control input-square" id="edit_r_c_awal" name="r_c_awal"
                value="{{ $data_tarif->r_c_awal }}" placeholder="Meteran Awal">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">-</label>
            <small class="form-text text-muted">Meteran Akhir</small>
            <input type="number" class="form-control input-square" id="edit_r_c_akhir" name="r_c_akhir"
                value="{{ $data_tarif->r_c_akhir }}" placeholder="Meteran Akhir">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">-</label>
            <small class="form-text text-muted">Biaya per-M<sup>3</sup></small>
            <input type="number" class="form-control input-square" id="edit_r_c_biaya" name="r_c_biaya"
                value="{{ $data_tarif->r_c_biaya }}" placeholder="Biaya">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">

            <small class="form-text text-muted">Biaya Administrasi</small>
            <input type="number" class="form-control input-square" id="edit_biaya_admin" name="biaya_admin"
                value="{{ $data_tarif->biaya_admin }}" placeholder="Meteran Awal">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">

            <small class="form-text text-muted">Biaya Pemeliharaan </small>
            <input type="number" class="form-control input-square" id="edit_biaya_service" name="biaya_service"
                value="{{ $data_tarif->biaya_service }}" placeholder="Meteran Akhir">
        </div>
    </div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" onclick="#" data-dismiss="modal">Close</button>
    <button class="btn btn-primary" onclick="update({{ $data_tarif->id_tarif }})"><i class="fas fa-save mr-2"></i>
        Perbarui
    </button>
</div>
