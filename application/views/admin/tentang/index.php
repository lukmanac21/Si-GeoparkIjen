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
                            <h5 class="card-header">Data Tentang</h5>
                            <div class="card-body">
                                <a href="<?= site_url('Admin/tentang/add_data') ?>" type="button" class="btn btn-space btn-primary">Tambah</a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Gambar Tentang</th>
                                                <th>Keterangan Tentang</th>
                                                <th>Link Tentang</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($tentang as $row_tentang) { ?>
                                            <tr>
                                                <td><img src="<?= base_url('assets/img/tentang/' . $row_tentang->img_tentang) ?>" width="175px"></td>
                                                <td><?= $row_tentang->ket_tentang ?></td>
                                                <td><?= $row_tentang->link_tentang ?></td>
                                                <td><a href="<?= site_url('Admin/tentang/edit_data/') . $row_tentang->id_tentang ?>"><i class="fa fa-edit"></i></a><a href="#" data-toggle="modal" data-target="#delete<?= $row_tentang->id_tentang; ?>"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php foreach ($tentang as $row_tentang) { ?>
                    <div class="modal fade" id="delete<?= $row_tentang->id_tentang ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form method="post" action="<?= site_url('Admin/tentang/delete_data'); ?>">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </a>
                                    </div>
                                    <div class="modal-body">
                                        <p>Hapus data <?= $row_tentang->ket_tentang; ?> ?</p>
                                        <input type="hidden" name="id_tentang" id="id_tentang" value="<?= $row_tentang->id_tentang ?>" required>
                                        <input type="hidden" name="imageLama" id="imageLama" value="<?= $row_tentang->img_tentang ?>" required>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                        <button type="submit" class="btn btn-primary">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php $this->load->view('_partials/js'); ?>
</body>

</html>