<div class="card">
    <div class="card-body">
        <h4 class="mb-3">Form Karyawan</h4>
        <form action="<?= base_url('admin/karyawan/add') ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="">NIK</label>
                      <input type="text" name="nik" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Kata Sandi</label>
                      <input type="text" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Gaji</label>
                      <input type="text" name="gaji" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Hak Cuti</label>
                      <input type="text" name="hak_cuti" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Divisi</label>
                      <select class="form-control" name="divisi" id="">
                          <?php foreach ($listDivisi as $d) { ?>
                              <option value="<?= $d->id ?>"><?= $d->nama_divisi ?></option>
                       <?php   } ?>
                      </select>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                      <label for="">Role</label>
                      <select class="form-control" name="role" id="">
                      <?php foreach ($listRole as $r) { ?>
                              <option value="<?= $r->id ?>"><?= $r->name ?></option>
                       <?php   } ?>
                      </select>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>

    </div>
</div>