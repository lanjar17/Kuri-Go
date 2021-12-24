<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-end">
            <a name="" id="" class="btn btn-primary" href="<?= base_url('admin/role/tambah') ?>" role="button">Tambah Role</a>
        </div>
        <h4 class="card-title">Daftar Role</h4>
        <table id="tbl-karyawan" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Role</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($listRole as $lRole) { ?>
                    <tr>
                        <td scope="row"><?= $no; ?></td>
                        <td><?= $lRole->name ?></td>
                        <td>
                            <a href="<?= base_url('admin/role/delete/') . $lRole->id ?>">
                                <i class="fa fa-trash text-danger" style="font-size:20px" aria-hidden="true"></i>
                            </a>
                            <a href="<?= base_url('admin/role/ubah/') . $lRole->id ?>">
                                <i class="fa fa-edit text-default" style="font-size:20px" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
              <?php $no++;  } ?>
            </tbody>
        </table>
    </div>
</div>