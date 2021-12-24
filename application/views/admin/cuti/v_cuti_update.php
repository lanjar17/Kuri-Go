<div class="card">
    <div class="card-body">
        <form action="<?= base_url('karyawan/cuti/update/').$cuti->id ?>" method="post">
        <h4>Form Cuti</h4>
        <div class="row mt-3">
            <div class="col-6">
                <div class="form-group">
                  <label for="">Tanggal Permintaan</label>
                  <input type="date" value="<?= $cuti->tanggal_permintaan ?>" name="tanggal_permintaan" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="">Lama Cuti</label>
                  <input type="text" value="<?= $cuti->lama_cuti ?>"  name="lama_cuti" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="">Keterangan</label>
                  <textarea name="keterangan" id="" class="form-control" placeholder="" aria-describedby="helpId">
                 <?= $cuti->keterangan ?> 
                  </textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">simpan</button>
                </div>
            </div>
        </div>

    </form>
    </div>
</div>