<!DOCTYPE html>
<html lang="en">
  <head>

  <?php $this->load->view('part/head');?>
	</head>
  <body> 

   <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>

      <?php $this->load->view('part/navbar');?>


	
	<!-- Start main content -->
	<main>
		
		<!-- Start Portfolio -->
		<section id="mu-portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-portfolio-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Galeri</h2>
										<p>Wisata terpopuler di kawasan Bondowoso.</p>
									</div>
								</div>
							</div>

							<div class="row">
                                <!-- Start Portfolio Filter -->
									<div class="mu-portfolio-filter-area">
										<ul class="mu-simplefilter">
                                            
                                            <li class="active" data-filter="all">All<span>/</span></li>
                                            <?php foreach($kategori as $row_kategori){?>
                                            <li data-filter="<?= $row_kategori->id_kategori?>"><?= $row_kategori->nama_kategori?><span>/</span> </li>
                                            <?php } ?>
							            </ul>
									</div>

									<!-- Start Portfolio Content -->
									<!-- Start Portfolio Content -->
									<div class="mu-portfolio-content">
										<div class="filtr-container">
                                            <?php foreach($galeri as $row_galeri){?>
							                <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="<?= $row_galeri->id_kategori?>">
							                   <a class="mu-imglink" href="assets/images/portfolio/img-1.jpg" title="PAINTING">
								                   	<img class="img-responsive" src="<?= base_url('assets/img/galeri/'.$row_galeri->nama_foto);?>" alt="image">
								                   	<div class="mu-filter-item-content">
								                    	<h4 class="mu-filter-item-title"><?= $row_galeri->keterangan?></h4>
								                    	<span class="fa fa-long-arrow-right"></span>
								                    </div>
							                   </a>
                                            </div>
                                            <?php } ?>
							            </div>
									</div>
									<!-- End Portfolio Content -->
								</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Portfolio -->

	</main>	
    <?php $this->load->view('part/footer');?>
    <?php $this->load->view('part/js');?>
    
  </body>
</html>