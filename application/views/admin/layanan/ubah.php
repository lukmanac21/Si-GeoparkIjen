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
                            <h2 class="pageheader-title">Data Layanan</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Layanan</a></li>
                                        <li class="breadcrumb-item active"><a href="#" class="breadcrumb-link">Data Layanan</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Data Layanan</h5>
                            <div class="card-body">
                            <?php foreach($layanan as $row_layanan){?>
                                <form id="validationform" action="<?= site_url('Admin/layanan/update_data')?>" method="post">
                                    <div class="form-group row">
                                        <label for="nama_layanan" class="col-12 col-sm-3 col-form-label text-sm-right">Nama Layanan</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="nama_layanan" id="nama_layanan" placeholder="Nama layanan" class="form-control" value="<?= $row_layanan->nama_layanan?>" required>
                                            <input type="hidden" name="id_layanan" id="id_layanan" value="<?= $row_layanan->id_layanan?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="icon" class="col-12 col-sm-3 col-form-label text-sm-right">Icon</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="icon" id="icon" placeholder="Icon" class="form-control" value="<?= $row_layanan->icon?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keterangan" class="col-12 col-sm-3 col-form-label text-sm-right">Keterangan</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <textarea  name="keterangan" placeholder="Keterangan" class="form-control" rows="3"><?= $row_layanan->keterangan?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row text-right">
                                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                            <button type="submit" class="btn btn-space btn-primary">Ubah</button>
                                            <a href="<?= site_url('Admin/layanan');?>" class="btn btn-space btn-secondary">Kembali</a>
                                        </div>
                                    </div>
                                </form>
                            <?php } ?>
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