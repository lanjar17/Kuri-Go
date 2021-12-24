<div class="card">
    <div class="card-body">
        <h4 class="card-title">Form Transaksi</h4>
        <form action="<?= base_url('admin/transaksi/update/').$trx->id ?>" method="post">
            <div class="row">
             <div class="col-6">
                  <div class="form-group">
                    <label for="">Pengirim</label>
                    <input type="text" value='<?= $trx->pengirim ?>' name="pengirim" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
              </div>
                <div class="col-6">
                    <div class="form-group">
                      <label for="">Penerima</label>
                      <input type="text" value='<?= $trx->penerima ?>' name="penerima" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="">Alamat Pengirim</label>
                    <input type="text" value='<?= $trx->alamat_pengirim ?>' name="alamat_pengirim" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                      <label for="">Alamat Penerima</label>
                      <input type="text" value='<?= $trx->alamat_penerima ?>' name="alamat_penerima" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                      <label for="">Telp Pengirim</label>
                      <input type="text" value='<?= $trx->telp_pengirim ?>' name="telp_pengirim" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                      <label for="">Telp Penerima</label>
                      <input type="text" value='<?= $trx->telp_penerima ?>' name="telp_penerima" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                      <label for="">Berat</label>
                      <input type="text" value='<?= $trx->berat ?>' name="berat" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                      <label for="">Harga</label>
                      <input type="text" value='<?= $trx->harga ?>' name="harga" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-12" id="form-produk">
                    <label for="">Produk</label>
                    <?php foreach ($produk as $p) {?>
                      <div class="row form-produk">
                          <div class="col-6">
                              <div class="form-group">
                                <label for="">Nama Produk</label>
                                <input type="text" value="<?= $p->nama ?>" name="nama[]" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              </div>
                          </div>
                          <div class="col-5">
                              <div class="form-group">
                                <label for="">Jumlah</label>
                                <input type="text" value="<?= $p->jumlah ?>" name="jumlah[]" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              </div>
                          </div>
                          <div class="col-1 d-flex align-items-center">
                            <a href="javascript:void(0)" class="hapus-produk" 
                            data-idtrx="<?=$trx->id?>" id="<?= $p->id ?>">
                              <i class="fa fa-minus-circle" aria-hidden="true"></i>
                            </a>
                          </div>
                      </div>
                <?php    } ?>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="button" class="btn btn-warning" id="add-produk">Tambah Produk</button>
                </div>
                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
    </form>
    </div>
</div>

