<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', 'Contact');
?>
<script>
    var elemento = document.getElementById("licontact");
    elemento.className = "active";
</script>
<!-- Page info section -->
<section class="page-info-section set-bg" data-setbg="img/page-info-bg/3.jpg">
		<div class="container">
			<h2>Blog</h2>
		</div>
	</section>
	<!-- Page info section end -->


	<!-- Contact section -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="contact-text">
						<h3>Get in touch</h3>
						<div class="contact-info">
							<div class="ci-image set-bg" data-setbg="img/doctors/1.jpg"></div>
							<div class="ci-content">
								<p>4127 Raoul Wallenber4127 Raoul Wallen berg Placea</p>
								<p>203-808-8613</p>
								<p>office@yourbusiness.com</p>
							</div>
						</div>
					</div>
					<form class="contact-form">
						<input type="text" placeholder="Name">
						<input type="text" placeholder="E-mail">
						<input type="text" placeholder="Subject">
						<textarea placeholder="Message"></textarea>
						<button class="site-btn">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<div class="map" id="map-canvas"></div>
	</section>
	<!-- Contact section end -->


	<!-- Newsletter section -->
	<section class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 banner-text text-white">
					<h4>Subscrieb to our newsletter</h4>
					<p>*Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus.</p>
				</div>
				<div class="col-lg-5 text-lg-right">
					<form class="newsletter-form">
						<input type="text" placeholder="Your E-mail">
						<button class="site-btn sb-dark">Subscribe</button>
					</form>
				</div>
			</div>
		</div>
	</section>
    <!-- Newsletter section end -->
    
	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvSrjrT_vLeWKhNvrICWiZWdc39dAZ3g8"></script>
	<script src="js/map.js"></script>
