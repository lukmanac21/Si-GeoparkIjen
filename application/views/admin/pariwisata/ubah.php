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
                            <h2 class="pageheader-title">Data Pariwisata</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pariwisata</a></li>
                                        <li class="breadcrumb-item active"><a href="#" class="breadcrumb-link">Data Pariwisata</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Data Pariwisata</h5>
                            <div class="card-body">
                            <?php foreach($pariwisata as $row_pariwisata){?>
                                <form id="validationform" action="<?= site_url('Admin/Pariwisata/update_data')?>" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Kategori</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="selectpicker" name="id_kategori" data-live-search="true">
                                            <?php foreach($kategori as $row_kategori){?>
                                            <option value="<?= $row_kategori->id_kategori?>"><?= $row_kategori->nama_kategori?></option>
                                            <?php } ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_pariwisata" class="col-12 col-sm-3 col-form-label text-sm-right">Nama Pariwisata</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="nama_pariwisata" id="nama_pariwisata" placeholder="Nama Pariwisata" class="form-control" value="<?= $row_pariwisata->nama_pariwisata?>" required>
                                            <input type="hidden" name="id_pariwisata" id="id_pariwisata" value="<?= $row_pariwisata->id_pariwisata?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Alamat</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="alamat_pariwisata" placeholder="Alamat" class="form-control" value="<?= $row_pariwisata->alamat_pariwisata?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Email</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="email" name="email_pariwisata" placeholder="Email" class="form-control" value="<?= $row_pariwisata->email_pariwisata?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">No Telp</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="notelp_pariwisata" placeholder="Nomer Telp" class="form-control" value="<?= $row_pariwisata->notelp_pariwisata?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Lattitude</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="lattitude" placeholder="Lattitude" class="form-control" value="<?= $row_pariwisata->lattitude?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Longitude</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="longitude" placeholder="Longitude" class="form-control" value="<?= $row_pariwisata->longitude?>">
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
                                            <button type="submit" class="btn btn-space btn-primary">Ubah</button>
                                            <a href="<?= site_url('Admin/Pariwisata');?>" class="btn btn-space btn-secondary">Kembali</a>
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