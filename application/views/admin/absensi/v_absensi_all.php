<div class="card">
    <div class="card-body">
        <h4 class="card-title">Daftar Absensi</h4>
        <table id="tbl-karyawan" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Karyawan</th>
                    <th>Divisi</th>
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
                        <td><?= $lAbsensi->name ?></td>
                        <td><?= $lAbsensi->nama_divisi ?></td>
                        <td><?= $lAbsensi->tanggal_kehadiran ?></td>
                        <td><?= $lAbsensi->check_in ?></td>
                        <td><?= $lAbsensi->check_out ?></td>
                    </tr>
              <?php $no++;  } ?>
            </tbody>
        </table>
    </div>
</div>