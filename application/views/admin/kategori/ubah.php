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
                            <h2 class="pageheader-title">Data Kategori</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Kategori</a></li>
                                        <li class="breadcrumb-item active"><a href="#" class="breadcrumb-link">Data Kategori</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Data Kategori</h5>
                            <div class="card-body">
                            <?php foreach($kategori as $row_kategori){?>
                                <form id="validationform" action="<?= site_url('Admin/kategori/update_data')?>" method="post">
                                    <div class="form-group row">
                                        <label for="nama_kategori" class="col-12 col-sm-3 col-form-label text-sm-right">Nama Kategori</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="nama_kategori" id="nama_kategori" placeholder="Nama kategori" class="form-control" value="<?= $row_kategori->nama_kategori?>" required>
                                            <input type="hidden" name="id_kategori" id="id_kategori" value="<?= $row_kategori->id_kategori?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row text-right">
                                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                            <button type="submit" class="btn btn-space btn-primary">Ubah</button>
                                            <a href="<?= site_url('Admin/kategori');?>" class="btn btn-space btn-secondary">Kembali</a>
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