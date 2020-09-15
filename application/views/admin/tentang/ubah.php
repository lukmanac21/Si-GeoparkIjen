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
                                        <li class="breadcrumb-item active"><a href="#" class="breadcrumb-link">Data tentang</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Data tentang</h5>
                            <div class="card-body">
                                <?php foreach ($tentang as $row_tentang) { ?>
                                    <form id="validationform" action="<?= site_url('Admin/tentang/update_data') ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Keterangan Tentang</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="ket_tentang" placeholder="Keterangan Tentang" class="form-control" value="<?= $row_tentang->ket_tentang ?>">
                                                <input type="hidden" name="id_tentang" class="form-control" value="<?= $row_tentang->id_tentang ?>">
                                                <input type="hidden" name="imageLama" class="form-control" value="<?= $row_tentang->img_tentang ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Link Tentang</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="link_tentang" placeholder="Link Tentang" class="form-control" value="<?= $row_tentang->link_tentang ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Gambar</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="file" class="form-control" name="file">
                                            </div>
                                        </div>
                                        <div class=" form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">Ubah</button>
                                                <a href="<?= site_url('Admin/tentang'); ?>" class="btn btn-space btn-secondary">Kembali</a>
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
    <?php $this->load->view('_partials/js'); ?>
</body>

</html>