	<!-- Start footer -->
	<footer id="mu-footer">
		<div class="mu-footer-bottom">
			<div class="container">
				<div class="row">
				<?php foreach($kontak as $row_kontak){?>
				<div class="col-md-12">
						<div class="mu-single-footer">
							<h3>Informasi Kontak</h3>
							<ul class="list-unstyled">
							  <li class="media">
							    <span class="fa fa-home"></span>
							    <div class="media-body">
							    	<p><?= $row_kontak->alamat_kontak?></p>
							    </div>
							  </li>
							  <li class="media">
							    <span class="fa fa-phone"></span>
							    <div class="media-body">
							       <p><?= $row_kontak->telp_kontak?></p>
							    </div>
							  </li>
							  <li class="media">
							    <span class="fa fa-envelope"></span>
							    <div class="media-body">
							     <p><?= $row_kontak->email_kontak?></p>
							    </div>
							  </li>
							  <li class="media">
							    <span class="fa fa-instagram"></span>
							    <div class="media-body">
							     <p><?= $row_kontak->instagram_kontak?></p>
							    </div>
							  </li>
							</ul>
						</div>
					</div>
				<?php } ?>
				<div class="row">
					<div class="col-md-12">
						<div class="mu-footer-bottom-area">
							<p class="mu-copy-right" style="padding-left:10px;">&copy; Copyright <a rel="nofollow" href="https://kominfo.bondowosokab.go.id/">Kominfo Bondowoso</a>. All right reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer -->