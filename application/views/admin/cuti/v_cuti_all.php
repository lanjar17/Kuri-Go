<div class="card">
    <div class="card-body">
        <h4 class="card-title">Daftar Cuti</h4>
        <table id="tbl-karyawan" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Karyawan</th>
                    <th>Divisi</th>
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
                        <td><?= $lCuti->nama_karyawan ?></td>
                        <td><?= $lCuti->nama_divisi ?></td>
                        <td><?= $lCuti->tanggal_pembuatan ?></td>
                        <td><?= $lCuti->tanggal_permintaan ?></td>
                        <td><?= $lCuti->status ?></td>
                        <td><?= $lCuti->keterangan ?></td>
                        <td><?= $lCuti->lama_cuti ?> hari</td>
                        <?php if($lCuti->status == 'Menunggu Persetujuan Atasan'){ ?>
                        <td>
                            <a class="btn btn-sm btn-primary" href="<?= base_url('admin/cuti/aprove/').$lCuti->id ?>">
                              approve
                            </a>
                            <a class="btn btn-sm btn-primary" href="<?= base_url('admin/cuti/tolak/').$lCuti->id ?>">
                             Tolak
                            </a>
                        </td>
                        <?php } ?>
                    </tr>
              <?php $no++;  } ?>
            </tbody>
        </table>
    </div>
</div>