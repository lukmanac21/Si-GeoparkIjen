<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
<?php $this->load->view('_partials/head');?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <?php $this->load->view('_partials/navbar');?>
        <?php $this->load->view('_partials/sidebar');?>
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Data Kontak</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Kontak</a></li>
                                        <li class="breadcrumb-item active"><a href="#" class="breadcrumb-link">Data Kontak</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Tambah Data</h5>
                            <div class="card-body">
                                <form id="validationform" action="<?= site_url('Admin/kontak/save_data')?>" method="post">
                                    <div class="form-group row">
                                        <label for="alamat_kontak" class="col-12 col-sm-3 col-form-label text-sm-right">Alamat</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="alamat_kontak" id="alamat_kontak" placeholder="Alamat" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telp_kontak" class="col-12 col-sm-3 col-form-label text-sm-right">Telepon</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="telp_kontak" id="telp_kontak" placeholder="Telepon" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Email</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="email" name="email_kontak" placeholder="Email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Instagram</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="instagram_kontak" placeholder="Instagram" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row text-right">
                                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                            <button type="submit" class="btn btn-space btn-primary">Simpan</button>
                                            <a href="<?= site_url('Admin/kontak');?>" class="btn btn-space btn-secondary">Kembali</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('_partials/js');?>
    </body>
 
</html>