<div class="card">
    <div class="card-body">
        <h4 class="mb-3">Form Role</h4>
        <form action="<?= base_url('admin/role/update/') . $role->id ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" name="name" value="<?= $role->name ?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>

    </div>
</div>