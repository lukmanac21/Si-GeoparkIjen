<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('part/head'); ?>
</head>

<body>

	<!--START SCROLL TOP BUTTON -->
	<a class="scrollToTop" href="#">
		<i class="fa fa-angle-up"></i>
	</a>
	<!-- END SCROLL TOP BUTTON -->

	<!-- Start Header -->
	<?php $this->load->view('part/navbar'); ?>
	<!-- End Header -->

	<!-- Start slider area -->
	<div id="mu-slider">
		<div class="mu-slide">
			<!-- Start single slide  -->
			<?php foreach ($slider as $row_slider) { ?>
				<div class="mu-single-slide">
					<img src="<?= base_url(); ?>assets/img/slider/<?= $row_slider->img_slider ?>" alt="slider img">
					<div class="mu-single-slide-content-area">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="mu-single-slide-content">
										<h1><?= $row_slider->judul_slider ?></h1>
										<p><?= $row_slider->keterangan ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<!-- End single slide  -->
		</div>
	</div>
	<!-- End Slider area -->


	<!-- Start main content -->
	<main>
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Tentang Geopark</h2>
										<p><?= $tentang['ket_tentang'] ?></p>
									</div>
								</div>
							</div>
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left">
										<img class="" src="<?= base_url(); ?>assets/user/images/about-us.jpg" alt="img">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<ul>
											<li>
												<h3>Visi</h3>
												<p><?= $visi['ket_visi'] ?></p>
											</li>
											<li>
												<h3>Misi</h3>
												<?php foreach ($misi as $row_misi) { ?>
													<p><?= $row_misi->ket_misi ?></p>
												<?php } ?>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Feature Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

		<!-- Call to Action -->
		<div id="mu-call-to-action">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-call-to-action-area">
							<div class="mu-call-to-action-left">
								<h2>Menuju Bondowoso Melesat</h2>
								<p>component for calling extra attention to featured content or information.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Start Services -->
		<section id="mu-service">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-service-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Layanan</h2>
									</div>
								</div>
							</div>
							<!-- Start Service Content -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-service-content">
										<div class="row">
											<!-- Start single service -->
											<?php foreach ($layanan as $row_layanan) { ?>
												<div class="col-md-4">
													<div class="mu-single-service">
														<div class="mu-single-service-content">
															<img><?= $row_layanan->img_layanan ?></img>
															<p><?= $row_layanan->nama_layanan ?></p>
														</div>
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<!-- End Service Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Services -->


		<!-- Start Client Testimonials -->
		<section id="mu-testimonials">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-testimonials-area">
							<h2>What Our Client Says</h2>

							<div class="mu-testimonials-block">
								<ul class="mu-testimonial-slide">

									<li>
										<img class="mu-rt-img" src="<?= base_url(); ?>assets/user/images/traveler-1.jpg" alt="img">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa</p>
										<h5 class="mu-rt-name">Emma Marshall</h5>
										<span class="mu-rt-title">Web Developer </span>
									</li>

									<li>
										<img class="mu-rt-img" src="<?= base_url(); ?>assets/user/images/traveler-2.jpg" alt="img">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa</p>
										<h5 class="mu-rt-name">Jhon Doe</h5>
										<span class="mu-rt-title">UI/UX Designer</span>
									</li>

									<li>
										<img class="mu-rt-img" src="<?= base_url(); ?>assets/user/images/traveler-3.jpg" alt="img">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa</p>
										<h5 class="mu-rt-name">Jessica Doe</h5>
										<span class="mu-rt-title">Web Designer </span>
									</li>

								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Client Testimonials -->

	</main>

	<!-- End main content -->


	<!-- Start footer -->
	<?php $this->load->view('part/footer'); ?>
	<!-- End footer -->
	<?php $this->load->view('part/js'); ?>

</body>

</html>