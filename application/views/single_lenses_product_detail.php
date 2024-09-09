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
						<li><?php echo $contact_lense_product_detail->lp_name; ?></li>
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
												<li data-thumb="<?php echo base_url().'assets/uploads/len_pid_'.$row->product_lense_id.'/'.$row->lp_img_name ?>">
													<div class="thumb-image"> <img src="<?php echo base_url().'assets/uploads/len_pid_'.$row->product_lense_id.'/'.$row->lp_img_name ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
												<?php } ?>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
									<h3><?php echo $contact_lense_product_detail->lp_name; ?></h3>
									<div class="occasional">
										<h5>Category :</h5>
										<div class="colr ert">
                                            <h6><?php echo $contact_lense_product_detail->lenses_cat_type; ?></h3>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h3>Product Specification</h3>
										</div>
										<div class="col-md-6">
											<ul class="text-left mt-lg-4 mt-3 list-group">
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Product Type :</strong> <?php echo $contact_lense_product_detail->product_type; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Type : </strong><?php echo $contact_lense_product_detail->type; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Manufacturer Details: </strong><?php echo $contact_lense_product_detail->manufacturer_details; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Country Of Origin : </strong><?php echo $contact_lense_product_detail->country_of_origin; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Model No: </strong><?php echo $contact_lense_product_detail->model_no; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Base Curve: </strong><?php echo $contact_lense_product_detail->base_curve; ?></li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul class="text-left mt-lg-4 mt-3 list-group">
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Diameter: </strong><?php echo $contact_lense_product_detail->diameter; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Lens Material: </strong><?php echo $contact_lense_product_detail->lens_material; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Packaging: </strong><?php echo $contact_lense_product_detail->packaging; ?></li>
												<!--<li class="list-group-item"><strong>Frame Material: </strong><?php echo $contact_lense_product_detail->frame_material; ?></li>-->
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Usage Duration: </strong><?php echo $contact_lense_product_detail->usage_duration; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Water Content Type:</strong> <?php echo $contact_lense_product_detail->water_content; ?></li>
												<li class="list-group-item"><strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Gender : </strong><?php echo $contact_lense_product_detail->gender; ?></li>
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
													<p><?php echo $contact_lense_product_detail->lp_description;?></p>
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
		<?php
	$this->load->view('includes/footer.php');
?>