<div class="card">
    <div class="card-body">
        <h4 class="card-title">Daftar Catatan Kerja</h4>
        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="<?= base_url('karyawan/note/tambah') ?>" role="button">Tambah Catatan</a>
        </div>
        <table id="tbl-karyawan" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($listNote as $lNote) { ?>
                    <tr>
                        <td scope="row"><?= $no; ?></td>
                        <td><?= $lNote->tanggal_pengerjaan ?></td>
                        <td><?= $lNote->keterangan ?></td>
                        <td>
                            <a href="<?= base_url('karyawan/note/ubah/').$lNote->id ?>">
                                <i class="fa fa-edit    "></i>
                            </a>
                            <a href="<?= base_url('karyawan/note/delete/').$lNote->id ?>">
                             <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
              <?php $no++;  } ?>
            </tbody>
        </table>
    </div>
</div>