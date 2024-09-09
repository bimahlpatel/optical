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
					<li>Contact Lenses</li>
				</ul>
			</div>
		</div>

	</div>

	<section class="banner-bottom py-lg-5 py-3">
		<div class="container">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h4 class="tittle my-lg-4 mt-3">Contact Lenses</h4>
				<div class="row">
				<?php foreach($contact_lense_category as $cat_list){ ?>
				<div class="checkout-right col-md-3 p-2">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th><?php echo $cat_list->lense_cat_name;?></th>
							</tr>
						</thead>
						<?php 
						$this->load->model('Site_Info_Model');
						$subcat_list = "select * from lenses_subcategory_master where lenses_cat_id  = ".$cat_list->lense_cat_id;
						$result = $this->Site_Info_Model->get_sub_lenses_category($subcat_list);
						
						?>
						<tbody>
							<?php 
								if(count($result) > 0){
								foreach($result as $subcat){
								
								?>
								
							<tr class="rem1">
								
									<td class="invert text-left text-dark"><a href="<?php echo base_url()?>contact_lenses/contact-lense-type/<?php echo $subcat->lense_sub_cat_slug;?>"><?php echo $subcat->lenses_cat_type; ?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></td>
								
							</tr>
							<?php } } else {?>
								<tr class="rem1">
								
									<td class="invert text-left text-dark">No Data found</td>
								
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<?php } ?>
				</div>
			</div>

		</div>
	</section>
    <?php
	$this->load->view('includes/footer.php');
?>