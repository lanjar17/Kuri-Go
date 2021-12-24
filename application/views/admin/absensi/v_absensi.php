<div class="card">
    <div class="card-body">
        <h4 class="card-title">Daftar Absensi</h4>
        <div class="d-flex justify-content-end">
            <form action="<?= base_url('karyawan/absensi/check_in') ?>" method="post">
            <button type="submit" class="btn btn-primary mr-2">Check In</button>
        </form>
            <form action="<?= base_url('karyawan/absensi/check_out') ?>" method="post">
            <button type="submit" class="btn btn-primary">Check Out</button>
        </form>
        </div>
        <table id="tbl-karyawan" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($listAbsensi as $lAbsensi) { ?>
                    <tr>
                        <td scope="row"><?= $no; ?></td>
                        <td><?= $lAbsensi->tanggal_kehadiran ?></td>
                        <td><?= $lAbsensi->check_in ?></td>
                        <td><?= $lAbsensi->check_out ?></td>
                    </tr>
              <?php $no++;  } ?>
            </tbody>
        </table>
    </div>
</div>