<section style="background: url(../../../images.pexels.com/photos/176851/pexels-photo-176851663a.jpg?w=940&amp;h=650&amp;auto=compress&amp;cs=tinysrgb);background-size: cover">
    <div class="height-100-vh bg-primary-trans">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="login-div">
                        <p class="logo mb-1">Kurir Go</p>
                        <?php
                            if($this->session->flashdata('alert')){?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                <strong><?= $this->session->flashdata("alert") ?></strong> 
                              </div>
                            <?php } ?>
                     
                        <form id="needs-validation" method="post" action="<?= base_url('admin/login/auth') ?>" autocomplete="off">
                            <div class="form-group">
                                <label>NIK</label>
                                <input value="" class="form-control input-lg" placeholder="Masukan nik..." type="text" name="nik" required>
                            </div>
                            <div class="form-group">
                                <label>Kata Sandi</label>
                                <input value="" name="password" class="form-control input-lg" placeholder="Masukan kata sandi..." type="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>