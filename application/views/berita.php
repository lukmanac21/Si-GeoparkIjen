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
  <!-- END SCROLL TOP BUTTON -->
  	
  	<!-- Start Header -->
      <?php $this->load->view('part/navbar');?>
	<!-- End Header -->

	
	<!-- Start main content -->
	<main>
		<!-- Start Blog -->
		<section id="mu-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-blog-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-blog-left">
                                        <!-- start single item -->
                                        <?php foreach($berita as $row_berita){?>
										<article class="mu-blog-item">
                                            <h1 class="mu-blog-item-title"><a href="#"><?= $row_berita->judul_berita?></a></h1>
											<a href="#"><img src="<?= base_url('assets/img/berita/'.$row_berita->img_berita);?>" alt="blgo image"></a>
											<div class="mu-blog-item-content">
												<ul class="mu-blog-meta">
													<li>Tanggal : <?= $row_berita->tgl_berita?> </li>
                                                </ul>
                                                <?php $isi_limit = $row_berita->isi_berita;
                                                    $isi_limit=character_limiter($isi_limit,100);
                                                ?>
												<?= $isi_limit;?>
												<a class="mu-blg-readmore-btn" href="<?= site_url('Berita/detail/').$row_berita->id_berita?>">Read more <i class="fa fa-long-arrow-right"></i></a>
											</div>
                                        </article>
                                        <?php } ?>
										<!-- End single item -->
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog --> 

	</main>
	
	<!-- End main content -->	
			
			
    <!-- Start footer -->
    <?php $this->load->view('part/footer');?>
	<!-- End footer -->

    <!-- JavaScript -->
    <?php $this->load->view('part/js');?>
    <!-- JavaScript -->
    
  </body>
</html>