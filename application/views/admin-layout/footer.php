<!--Jquery-->
<script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery-3.2.1.min.js"></script>
<!--Bootstrap Js-->
<script type="text/javascript" src="<?= base_url() ?>/assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
<!--Modernizr Js-->
<script type="text/javascript" src="<?= base_url() ?>/assets/js/modernizr.custom.js"></script>

<!--Morphin Search JS-->
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/morphin-search/classie.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/morphin-search/morphin-search.js"></script>
<!--Morphin Search JS-->
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/preloader/pathLoader.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/preloader/preloader-main.js"></script>

<!--Chart js-->
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/charts/Chart.min.js"></script>

<!--Sparkline Chart Js-->
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/sparkline/jquery.charts-sparkline.js"></script>

<!--Custom Scroll-->
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/customScroll/jquery.mCustomScrollbar.min.js"></script>
<!--Sortable Js-->
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/sortable2/sortable.min.js"></script>
<!--DropZone Js-->
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/dropzone/dropzone.js"></script>
<!--Date Range JS-->
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/date-range/moment.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/date-range/daterangepicker.js"></script>
<!--CK Editor JS-->
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/ckEditor/ckeditor.js"></script>
<!--Data-Table JS-->
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/data-tables/datatables.min.js"></script>
<!--Editable JS-->
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/editable/editable.js"></script>
<!--Full Calendar JS-->
<script type="text/javascript" src="<?= base_url() ?>/assets/plugins/full-calendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

<!--- Main JS -->
<script src="<?= base_url() ?>/assets/js/main.js"></script>
<script>
    $(document).ready(function() {
        $('#tbl-karyawan').DataTable();

        const formProduk = $('#form-produk');
        const buttonAddProduk = $('#add-produk');

        buttonAddProduk.on('click', function() {
            formProduk.append(`
        <div class="row form-produk">  
                 <div class="col-6">
                            <div class="form-group">
                              <label for="">Nama Produk</label>
                              <input type="text" name="nama[]" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                              <label for="">Jumlah</label>
                              <input type="text" name="jumlah[]" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-1 d-flex align-items-center">
                        <a href='javascript:void(0)' class="hapus-produk">
                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                        </a>
                        </div>
                        </div>
                        `)

            $('body').on('click','.hapus-produk', function(e) {
                e.preventDefault();
            const idTrx = e.currentTarget.getAttribute('data-idtrx');
            const idProduct = e.currentTarget.id;

                if($('.form-produk').length > 1){
                  if($(this).attr('id')){
                        window.location.href = `<?= base_url('admin/transaksi/deleteProduk/') ?>${idProduct}/${idTrx}`
                    }else{
                        $(this).closest('.form-produk').remove()
                    }
                }
            })
        })
        
        $('body').on('click', '.hapus-produk',function(e) {
            e.preventDefault();
            const idTrx = e.currentTarget.getAttribute('data-idtrx');
            const idProduct = e.currentTarget.id;

            if($('.form-produk').length > 1){
                    if(idProduct){
                        window.location.href = `<?= base_url('admin/transaksi/deleteProduk/') ?>${idProduct}/${idTrx}`
                    }else{
                        $(this).closest('.form-produk').remove()
                    }
                }
        })
    });
</script>

</body>

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/light/pages_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Dec 2021 11:06:18 GMT -->

</html>