<div class="card">
    <div class="card-body">
        <form action="<?= base_url('karyawan/note/add') ?>" method="post">
        <h4>Form Catatan Kerja</h4>
        <div class="row mt-3">
            <div class="col-6">
                <div class="form-group">
                  <label for="">Tanggal</label>
                  <input type="date" name="tanggal_pengerjaan" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="">Keterangan</label>
                  <input type="text" name="keterangan" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">simpan</button>
                </div>
            </div>
        </div>

    </form>
    </div>
</div>