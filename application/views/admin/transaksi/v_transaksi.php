<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-end">
            <a name="" id="" class="btn btn-primary" href="<?= base_url('admin/transaksi/tambah') ?>" role="button">Buat Transaksi</a>
        </div>
        <h4 class="card-title">Daftar Transaksi</h4>
        <table id="tbl-karyawan" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Resi</th>
                    <th>Pengirim</th>
                    <th>Telp Pengirim</th>
                    <th>Alamat Pengirim</th>
                    <th>Penerima</th>
                    <th>Telp Penerima</th>
                    <th>Alamat Penerima</th>
                    <th>Berat</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($listTransaksi as $lt) { ?>
                    <tr>
                        <td scope="row"><?= $no; ?></td>
                        <td><?= $lt->no_resi ?></td>
                        <td><?= $lt->pengirim ?></td>
                        <td><?= $lt->telp_pengirim ?></td>
                        <td><?= $lt->alamat_pengirim ?></td>
                        <td><?= $lt->penerima ?></td>
                        <td><?= $lt->telp_penerima ?></td>
                        <td><?= $lt->alamat_penerima ?></td>
                        <td><?= $lt->berat ?></td>
                        <td><?= $lt->harga ?></td>
                        <td>
                            <a href="<?= base_url('admin/transaksi/ubah/') . $lt->id ?>">
                                <i class="fa fa-edit text-default" style="font-size:20px" aria-hidden="true"></i>
                            </a>
                            <a href="<?= base_url('admin/transaksi/detail/') . $lt->id ?>">
                                <i class="fa fa-eye text-default" style="font-size:20px" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
              <?php $no++;  } ?>
            </tbody>
        </table>
    </div>
</div>