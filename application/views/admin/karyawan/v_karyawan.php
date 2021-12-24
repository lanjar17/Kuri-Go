<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-end">
            <a name="" id="" class="btn btn-primary" href="<?= base_url('admin/karyawan/tambah') ?>" role="button">Tambah Karyawan</a>
        </div>
        <h4 class="card-title">Daftar Karyawan</h4>
        <table id="tbl-karyawan" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama Karyawan</th>
                    <th>Divisi</th>
                    <th>Gaji</th>
                    <th>Sisa Cuti</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($listKaryawan as $k) { ?>
                    <tr>
                        <td scope="row"><?= $no; ?></td>
                        <td><?= $k->nik ?></td>
                        <td><?= $k->name ?></td>
                        <td><?= $k->nama_divisi ?></td>
                        <td><?= $k->gaji ?></td>
                        <td><?= $k->hak_cuti  ?> Hari</td>
                        <td>
                            <a href="<?= base_url('admin/karyawan/delete/') . $k->user_id ?>">
                                <i class="fa fa-trash text-danger" style="font-size:20px" aria-hidden="true"></i>
                            </a>
                            <a href="<?= base_url('admin/karyawan/ubah/') . $k->user_id ?>">
                                <i class="fa fa-edit text-default" style="font-size:20px" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
              <?php $no++;  } ?>
            </tbody>
        </table>
    </div>
</div>