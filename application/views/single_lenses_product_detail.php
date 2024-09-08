<?php
	$this->load->view('includes/header.php');
?>
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="<?php echo base_url()?>">Home</a>
							<i>|</i>
						</li>
						<li><?php echo $productdetail->product_title; ?></li>
					</ul>
				</div>
			</div>

		</div>
		
	</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop pt-lg-4 pt-3">
					<div class="row">
							<div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">
											<ul class="slides">
												<?php foreach($product_gallery as $row){?>
												<li data-thumb="<?php echo base_url().'assets/uploads/prid_'.$row->product_id.'/'.$row->product_img_name ?>">
													<div class="thumb-image"> <img src="<?php echo base_url().'assets/uploads/prid_'.$row->product_id.'/'.$row->product_img_name ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
												<?php } ?>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
									<h3><?php echo $productdetail->product_title; ?></h3>
									<div class="occasional">
										<h5>Category :</h5>
										<div class="colr ert">
                                            <h6><?php echo $productdetail->product_title; ?></h3>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h3>Product Specification</h3>
										</div>
										<div class="col-md-6">
											<ul class="text-left mt-lg-4 mt-3 list-group">
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Frame Type :</strong> <?php echo $productdetail->frame_type; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Frame Shape : </strong><?php echo $productdetail->frame_shape; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Frame Size: </strong><?php echo $productdetail->frame_size; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Frame Width : </strong><?php echo $productdetail->frame_width; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Frame Dimensions: </strong><?php echo $productdetail->frame_dimensions; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Frame colour: </strong><?php echo $productdetail->frame_colour; ?></li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul class="text-left mt-lg-4 mt-3 list-group">
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Frame Weight: </strong><?php echo $productdetail->weight; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Frame Group: </strong><?php echo $productdetail->weight_group; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Material: </strong><?php echo $productdetail->material; ?></li>
												<!--<li class="list-group-item"><strong>Frame Material: </strong><?php echo $productdetail->frame_material; ?></li>-->
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Temple Material: </strong><?php echo $productdetail->temple_material; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Prescription Type:</strong> <?php echo $productdetail->prescription_type; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Frame Style: </strong><?php echo $productdetail->frame_style; ?></li>
											</ul>

										</div>
									</div>
									
								</div>
								<div class="clearfix"> </div>
								<!--/tabs-->
								<div class="responsive_tabs">
									<div id="horizontalTab">
										<ul class="resp-tabs-list">
											<li>Description</li>
										</ul>
										<div class="resp-tabs-container">
											<!--/tab_one-->
											<div class="tab1">
												<div class="single_page">
													<p><?php echo $productdetail->product_description;?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--//tabs-->
					
					</div>
				</div>
			</div>
		</section>
		<!--footer -->
		<footer class="py-lg-5 py-3">
			<div class="container-fluid px-lg-5 px-3">
				<div class="row footer-top">
					<div class="col-lg-3 footer-grid">
						<div class="footer-title">
							<h3>About Us</h3>
						</div>
						<div class="footer-text">
							<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at
								tellus. Nulla porttitor accumsana tincidunt.</p>
							<ul class="footer-social text-left mt-lg-4 mt-3">

								<li class="mx-2">
									<a href="#">
										<span class="fab fa-facebook-f"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-twitter"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-google-plus-g"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-linkedin-in"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fas fa-rss"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-vk"></span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 footer-grid">
						<div class="footer-title">
							<h3>Get in touch</h3>
						</div>
						<div class="contact-info">
							<h4>Location :</h4>
							<p>0926k 4th block building, king Avenue, New York City.</p>
							<div class="phone">
								<h4>Contact :</h4>
								<p>Phone : +121 098 8907 9987</p>
								<p>Email :
									<a href="mailto:info@example.com">info@example.com</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 footer-grid">
						<div class="footer-title">
							<h3>Quick Links</h3>
						</div>
						<ul class="links">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="about.html">About</a>
							</li>
							<li>
								<a href="404.html">Error</a>
							</li>
							<li>
								<a href="shop.html">Shop</a>
							</li>
							<li>
								<a href="contact.html">Contact Us</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 footer-grid">
						<div class="footer-title">
							<h3>Sign up for your offers</h3>
						</div>
						<div class="footer-text">
							<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
							<form action="#" method="post">
								<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
								<button class="btn1">
									<i class="far fa-envelope" aria-hidden="true"></i>
								</button>
								<div class="clearfix"> </div>
							</form>
						</div>
					</div>
				</div>
				<div class="copyright mt-4">
					<p class="copy-right text-center ">&copy; 2018 Goggles. All Rights Reserved.
				</p>
				</div>
			</div>
		</footer>
		<!-- //footer -->

		<!--jQuery-->
		<script src="<?php echo base_url()?>/assets/js/jquery-2.2.3.min.js"></script>
		<!-- newsletter modal -->
		<!--search jQuery-->
		<script src="<?php echo base_url()?>/assets/js/modernizr-2.6.2.min.js"></script>
		<script src="<?php echo base_url()?>/assets/js/classie-search.js"></script>
		<script src="<?php echo base_url()?>/assets/js/demo1-search.js"></script>
		<!--//search jQuery-->
		<!-- cart-js -->
		<script src="<?php echo base_url()?>/assets/js/minicart.js"></script>
		<script>
			googles.render();

			googles.cart.on('googles_checkout', function (evt) {
				var items, len, i;

				if (this.subtotal() > 0) {
					items = this.items();

					for (i = 0, len = items.length; i < len; i++) {}
				}
			});
		</script>
		<!-- //cart-js -->
		<script>
			$(document).ready(function () {
				$(".button-log a").click(function () {
					$(".overlay-login").fadeToggle(200);
					$(this).toggleClass('btn-open').toggleClass('btn-close');
				});
			});
			$('.overlay-close1').on('click', function () {
				$(".overlay-login").fadeToggle(200);
				$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
				open = false;
			});
		</script>
		<!-- carousel -->
		<!-- price range (top products) -->
		<script src="<?php echo base_url()?>/assets/js/jquery-ui.js"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->

		<script src="<?php echo base_url()?>/assets/js/owl.carousel.js"></script>
		<script>
			$(document).ready(function () {
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 10,
					responsiveClass: true,
					responsive: {
						0: {
							items: 1,
							nav: true
						},
						600: {
							items: 2,
							nav: false
						},
						900: {
							items: 3,
							nav: false
						},
						1000: {
							items: 4,
							nav: true,
							loop: false,
							margin: 20
						}
					}
				})
			})
		</script>

		<!-- //end-smooth-scrolling -->

		<!-- single -->
		<script src="<?php echo base_url()?>/assets/js/imagezoom.js"></script>
		<!-- single -->
		<!-- script for responsive tabs -->
		<script src="<?php echo base_url()?>/assets/js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!-- FlexSlider -->
		<script src="<?php echo base_url()?>/assets/js/jquery.flexslider.js"></script>
		<script>
			// Can also be used with $(document).ready()
			$(window).load(function () {
				$('.flexslider1').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
			});
		</script>
		<!-- //FlexSlider-->

		<!-- dropdown nav -->
		<script>
			$(document).ready(function () {
				$(".dropdown").hover(
					function () {
						$('.dropdown-menu', this).stop(true, true).slideDown("fast");
						$(this).toggleClass('open');
					},
					function () {
						$('.dropdown-menu', this).stop(true, true).slideUp("fast");
						$(this).toggleClass('open');
					}
				);
			});
		</script>
		<!-- //dropdown nav -->
	<script src="<?php echo base_url()?>/assets/js/move-top.js"></script>
    <script src="<?php echo base_url()?>/assets/js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


		<script src="<?php echo base_url()?>/assets/js/bootstrap.js"></script>
		<!-- js file -->
</body>

</html>