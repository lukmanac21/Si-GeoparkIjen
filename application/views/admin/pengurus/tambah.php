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
                            <h2 class="pageheader-title">Data Pengurus</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pengurus</a></li>
                                        <li class="breadcrumb-item active"><a href="#" class="breadcrumb-link">Data Pengurus</a></li>
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
                                <form id="validationform" action="<?= site_url('Admin/Pengurus/save_data')?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Wisata</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="selectpicker" name="id_pariwisata" data-live-search="true">
                                            <?php foreach($pariwisata as $row_pariwisata){?>
                                            <option value="<?= $row_pariwisata->id_pariwisata?>"><?= $row_pariwisata->nama_pariwisata?></option>
                                            <?php } ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Bagian</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="selectpicker" name="id_bagian" data-live-search="true">
                                            <?php foreach($bagian as $row_bagian){?>
                                            <option value="<?= $row_bagian->id_bagian?>"><?= $row_bagian->nama_bagian?></option>
                                            <?php } ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_pengurus" class="col-12 col-sm-3 col-form-label text-sm-right">Nama Pengurus</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="nama_pengurus" id="nama_pengurus" placeholder="Nama pengurus" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">No Telp</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="notelp_pengurus" placeholder="Nomer Telp" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Keterangan</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="keterangan" placeholder="Keterangan" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Gambar</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="file" class="form-control" name="file" id="customFile">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row text-right">
                                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                            <button type="submit" class="btn btn-space btn-primary">Simpan</button>
                                            <a href="<?= site_url('Admin/pengurus');?>" class="btn btn-space btn-secondary">Kembali</a>
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