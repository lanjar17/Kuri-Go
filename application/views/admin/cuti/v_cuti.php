<div class="card">
    <div class="card-body">
        <h4 class="card-title">Daftar Cuti</h4>
        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="<?= base_url('karyawan/cuti/tambah') ?>" role="button">Tambah Cuti</a>
        </div>
        <table id="tbl-karyawan" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Tanggal Permintaan</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                    <th>Lama Cuti</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($listCuti as $lCuti) { ?>
                    <tr>
                        <td scope="row"><?= $no; ?></td>
                        <td><?= $lCuti->tanggal_pembuatan ?></td>
                        <td><?= $lCuti->tanggal_permintaan ?></td>
                        <td><?= $lCuti->status ?></td>
                        <td><?= $lCuti->keterangan ?></td>
                        <td><?= $lCuti->lama_cuti ?> hari</td>
                        <td>
                            <a href="<?= base_url('karyawan/cuti/ubah/').$lCuti->id ?>">
                                <i class="fa fa-edit    "></i>
                            </a>
                            <a href="<?= base_url('karyawan/cuti/delete/').$lCuti->id ?>">
                             <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
              <?php $no++;  } ?>
            </tbody>
        </table>
    </div>
</div>