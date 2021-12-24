<section class="">
           
              <div class="pad-50 visible-lg"></div>
          </section>
   <!-- Track Product -->
   
   <section class="mt-5">
              <div class=" container">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-3 mt-5">
                          <h2 class="title-1"> Cek Barang Kamu </h2>
                          <div class="row">
                          <form class="" method="post" action="<?= base_url('tracking/cek_resi') ?>">
                                  <div class="col-md-9 col-sm-9">
                                      <div class="form-group">
                                          <input value="<?= isset($no_resi) ? $no_resi :'' ?>" type="text" name='no_resi' placeholder="Masukan No Resi [exp : #RESI20211516001]" required="" class="form-control box-shadow">
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-sm-3">
                                      <div class="form-group">
                                          <button class="btn-1">Cek Resi</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <?php if(isset($status)){?>
                        <div class="col-12 mt-5">
                            <table class="table">
                                <thead >
                                    <tr >
                                        <th class="text-center">No</th>
                                        <th>Status</th>
                                        <th class="text-center">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($status as $s) {?>
                               
                                        <tr>
                               <td class="text-center" scope="row"><?= $no ?></td>
                               <td ><?= $s->name ?></td>
                               <td class="text-center"><?= $s->tanggal ?></td>
                            </tr>
                                   <?php $no++; } ?>
                                </tbody>
                            </table>
                        </div>
                    <?php  } ?>
                  </div>
              </div>
          </section>