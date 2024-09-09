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
		<?php
	$this->load->view('includes/footer.php');
?>