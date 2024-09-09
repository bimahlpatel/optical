<?php
	$this->load->view('includes/header.php');
?>
    <!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index.html">Home</a>
							<i>|</i>
						</li>
						<li>Contact Us</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
<section class="banner-bottom py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle text-center my-lg-4 my-4">Our Store</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">We love to discuss your idea</p>
				<?php foreach($store_location as $storelocation) {?>
                <div class="address row">
                    <div class="col-md-6">
                        <div class="col-lg-12 address-grid">
                            <div class="row address-info">
                                <div class="col-md-2 address-left text-center">
                                    <i class="far fa-info"></i>
                                </div>
                                <div class="col-md-10 address-right text-left">
                                    <h6>Store Name</h6>
                                    <p> <?php echo $storelocation->store_name;?>
                                    </p>
                                    <h6>Address</h6>
                                    <p> <?php echo $storelocation->store_address;?>
                                    </p>
                                    <h6>Email</h6>
                                    <p>
                                        <a href="mailto:<?php echo $storelocation->store_email;?>"> <?php echo $storelocation->store_email;?></a>

                                    </p>
                                    <h6>Phone</h6>
                                    <p><?php echo $storelocation->store_contactno;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-map">
                            <?php echo $storelocation->store_location;?>
                        </div>
                    </div>
				</div>
                <?php } ?>
			</div>
		</div>
	</section>
    <?php
	$this->load->view('includes/footer.php');
?>