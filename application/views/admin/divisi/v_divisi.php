<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-end">
            <a name="" id="" class="btn btn-primary" href="<?= base_url('admin/divisi/tambah') ?>" role="button">Tambah Divisi</a>
        </div>
        <h4 class="card-title">Daftar Divisi</h4>
        <table id="tbl-karyawan" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Divisi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($listDivisi as $lDivisi) { ?>
                    <tr>
                        <td scope="row"><?= $no; ?></td>
                        <td><?= $lDivisi->nama_divisi ?></td>
                        <td>
                            <a href="<?= base_url('admin/divisi/delete/') . $lDivisi->id ?>">
                                <i class="fa fa-trash text-danger" style="font-size:20px" aria-hidden="true"></i>
                            </a>
                            <a href="<?= base_url('admin/divisi/ubah/') . $lDivisi->id ?>">
                                <i class="fa fa-edit text-default" style="font-size:20px" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
              <?php $no++;  } ?>
            </tbody>
        </table>
    </div>
</div>