<div class="card">
    <div class="card-body">
            <div class="row">
              <div class="col-12">
                  <div class="form-group">
                    <h5 for="">No Resi : #<?= $trx->no_resi ?></h5>
                  </div>
              </div>
              <div class="col-6">
                  <div class="form-group"> Pengirim : <label for=""><?= $trx->pengirim ?></label>
                 </div>
              </div>
                <div class="col-6">
                    <div class="form-group">
                    <label for="">Penerima : <?= $trx->penerima ?></label>
                    </div>
                </div>
                <div class="col-6">
                  <div class="form-group"> <label for=""> Alamat Pengirim : <?= $trx->alamat_pengirim ?></label>
                  </div>
                </div>
                <div class="col-6">
                    <div class="form-group"> <label for=""> Alamat Penerima : <?= $trx->alamat_penerima ?></label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"> <label for="">Telp Pengirim : <?= $trx->telp_pengirim ?></label>
                
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"> <label for=""> Telp Penerima : <?= $trx->telp_penerima ?></label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"> <label for="">Berat : <?= $trx->berat ?></label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"> <label for=""> Harga : <?= $trx->harga ?></label>
                    </div>
                </div>
                <div class="col-12">
                    <h5 for="">Produk</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php $no = 1; foreach ($produk as $p) {?>
                                <tr>
                                    <td scope="row"><?= $no ?></td>
                                    <td scope="row"><?= $p->nama ?></td>
                                    <td scope="row"><?= $p->jumlah ?></td>
                                </tr>
                               <?php $no++; } ?>
                            </tbody>
                        </table>
                 </div>
            
                </div>
                <div class="col-12 mt-3">
                    <h5 for="">Status Pengiriman</h5>
                    <div class="d-flex justify-content-end">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
                          Perbarui Status Pengiriman
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Form Statu Pengiriman</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('admin/transaksi/tambahStatus/') . $trx->id ?>" method="post">
                                        <div class="form-group">
                                          <label for="">Status</label>
                                          <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Perbarui</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php $no = 1; foreach ($status as $s) {?>
                                <tr>
                                    <td scope="row"><?= $no ?></td>
                                    <td scope="row"><?= $s->name ?></td>
                                    <td scope="row"><?= $s->tanggal ?></td>
                                </tr>
                               <?php $no++; } ?>
                            </tbody>
                        </table>
                 </div>
            
                </div>
    </div>
</div>

