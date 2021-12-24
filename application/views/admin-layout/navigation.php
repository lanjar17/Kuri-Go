<!--Navigation-->
<nav id="navigation" class="navigation-sidebar">
    <div class="navigation-header">
        <a href="index.html"><span class="logo">Kurir Go</span></a>
        <!--<img src="logo.png" alt="logo" class="brand" height="50">-->
    </div>

    <!--Navigation Profile area-->
    <div class="navigation-profile">
        <img class="profile-img rounded-circle" src="<?=base_url()?>/assets/images/1.jpg" alt="profile image">
        <h4 class="name"><?= $this->session->userdata('user')->nama_user; ?></h4>
        <span class="designation"><?= $this->session->userdata('user')->nama_divisi; ?></span>
    </div>

    <!--Navigation Menu Links-->
    <div class="navigation-menu">

        <ul class="menu-items custom-scroll">
            <li>
                <a href="<?= base_url('admin/dashboard') ?>" class="active">
                    <span class="icon-thumbnail"><i class="dripicons-browser"></i></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <?php  if($this->session->userdata('role') == 'Admin'){ ?>
           
            <li>
                <a href="<?= base_url('admin/karyawan') ?>">
                    <span class="icon-thumbnail">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                    <span class="title">Karyawan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/role') ?>">
                    <span class="icon-thumbnail">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                    <span class="title">Master Role</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/divisi') ?>">
                    <span class="icon-thumbnail">
                        <i class="fa fa-building" aria-hidden="true"></i>
                    </span>
                    <span class="title">Master Divisi</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/absensi') ?>">
                    <span class="icon-thumbnail">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                    <span class="title">absensi</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/cuti') ?>">
                    <span class="icon-thumbnail">
                        <i class="fa fa-list" aria-hidden="true"></i>
                    </span>
                    <span class="title">Daftar Cuti</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/transaksi') ?>">
                    <span class="icon-thumbnail">
                        <i class="fa fa-list" aria-hidden="true"></i>
                    </span>
                    <span class="title">Transaksi</span>
                </a>
            </li>
            <?php  } else {?>
                <li>
                <a href="<?= base_url('karyawan/absensi') ?>">
                    <span class="icon-thumbnail">
                        <i class="fa fa-list" aria-hidden="true"></i>
                    </span>
                    <span class="title">Absen</span>
                </a>
            </li> <li>
                <a href="<?= base_url('karyawan/cuti') ?>">
                    <span class="icon-thumbnail">
                        <i class="fa fa-list" aria-hidden="true"></i>
                    </span>
                    <span class="title">Cuti</span>
                </a>
            </li> <li>
                <a href="<?= base_url('karyawan/note') ?>">
                    <span class="icon-thumbnail">
                        <i class="fa fa-list" aria-hidden="true"></i>
                    </span>
                    <span class="title">Catatan Kerja</span>
                </a>
            </li>
                <?php } ?>
            <li>
                <a href="<?= base_url('admin/logout') ?>">
                    <span class="icon-thumbnail">
        <i class="fa fa-power-off" aria-hidden="true"></i>
                </span>
                    <span class="title">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>