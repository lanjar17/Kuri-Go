<div class="card">
    <div class="card-body">
        <h4 class="mb-3">Form Divisi</h4>
        <form action="<?= base_url('admin/divisi/add') ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>

    </div>
</div>