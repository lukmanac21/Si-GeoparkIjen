<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php $this->load->view('_partials/head'); ?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php $this->load->view('_partials/navbar'); ?>
        <?php $this->load->view('_partials/sidebar'); ?>
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Data Tentang</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tentang</a></li>
                                        <li class="breadcrumb-item active"><a href="#" class="breadcrumb-link">Data Tentang</a></li>
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
                                <form id="validationform" action="<?= site_url('Admin/tentang/save_data') ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="nama_berita" class="col-12 col-sm-3 col-form-label text-sm-right">Keterangan Tentang</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="ket_tentang" id="ket_tentang" placeholder="Ketrangan Tentang" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_berita" class="col-12 col-sm-3 col-form-label text-sm-right">Link Tentang</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="link_tentang" id="link_tentang" placeholder="Link Tentang" class="form-control" required>
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
                                            <a href="<?= site_url('Admin/tentang'); ?>" class="btn btn-space btn-secondary">Kembali</a>
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
    <?php $this->load->view('_partials/js'); ?>
</body>

</html>