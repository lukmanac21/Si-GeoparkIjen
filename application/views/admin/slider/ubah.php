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
                            <h2 class="pageheader-title">Data Slider</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Slider</a></li>
                                        <li class="breadcrumb-item active"><a href="#" class="breadcrumb-link">Data Slider</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Ubah Data</h5>
                            <div class="card-body">
                            <?php foreach($slider as $row_slider){?>
                                <form id="validationform" action="<?= site_url('Admin/slider/update_data')?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="judul_slider" class="col-12 col-sm-3 col-form-label text-sm-right">Judul Slider</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="judul_slider" id="judul_slider" placeholder="Judul slider" class="form-control" value="<?= $row_slider->judul_slider?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Keterangan</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" value="<?= $row_slider->judul_slider?>">
                                            <input type="hidden" name="id_slider" class="form-control" value="<?= $row_slider->id_slider?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Gambar</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="file" class="form-control" name="file" id="customFile">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Status</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="selectpicker" name="status" data-live-search="true">
                                           <option value="1">Aktif</option>
                                           <option value="0">Tidak Aktif</option>
                                        </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row text-right">
                                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                            <button type="submit" class="btn btn-space btn-primary">Simpan</button>
                                            <a href="<?= site_url('Admin/Slider');?>" class="btn btn-space btn-secondary">Kembali</a>
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