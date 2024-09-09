 <!-- Page Header Start-->
 <?php
            include_once(APPPATH.'views/includes/header.php');
        ?>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/vendors/js-datatables/style.css">
 <!-- Page Header Ends -->
 <!-- Page Body Start-->
 <div class="page-body-wrapper">
     <!-- Page Sidebar Start-->
     <?php
            include_once(APPPATH.'views/includes/sidebar.php');
        ?>
     <!-- Page Sidebar Ends-->
     <div class="page-body">
         <div class="container-fluid">
             <div class="page-title">
                 <div class="row">
                     <div class="col-6">
                         <h4>
                             Display Brand</h4>
                     </div>
                     <div class="col-6">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.html">
                                     <svg class="stroke-icon">
                                         <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-home">
                                         </use>
                                     </svg></a></li>
                             <li class="breadcrumb-item active">Brand</li>
                         </ol>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Container-fluid starts-->
         <div class="container-fluid">
             <div class="row">
                 <div class="col-sm-12">
                     <div class="card">
                         <div class="card-body">
                             <div class="list-product-header">
                                 <div>
                                     <a
                                         class="btn btn-primary f-w-500" href="javascript:void(0)"
                                         data-bs-toggle="modal" data-bs-target="#dashboard8"><i
                                             class="fa fa-plus pe-2"></i>Add Brand</a>
                                 </div>

                             </div>
                             <div class="list-product list-category">
                                 <table class="table" id="project-status">
                                     <thead>
                                         <tr>
                                             <th><span class="f-light f-w-600">No</span></th>
                                             <th> <span class="f-light f-w-600">Brand</span></th>
                                             <th> <span class="f-light f-w-600">Brand Logo</span></th>
                                             <th> <span class="f-light f-w-600">Brand Description</span></th>
                                             <th> <span class="f-light f-w-600">Status</span></th>
                                             <th> <span class="f-light f-w-600">Action</span></th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php if(count($brandlist)){
                                            $cnt=1; 
                                            foreach($brandlist as $row){?>

                                         <tr class="product-removes">
                                             <td>
                                                 <div class="form-check">
                                                     <p><?php echo $cnt;?></p>
                                                 </div>
                                             </td>
                                             <td>
                                                 <div class="product-names">
                                                     <p><?php echo $row->brand_name;?></p>
                                                 </div>
                                             </td>
                                             <td>
                                                 <div class="product-names">
                                                     <img src="<?php echo COMPANY_SITE.'assets/uploads/brand/'.$row->brand_logo;?>"
                                                         width="50" height="50"></p>
                                                 </div>
                                             </td>
                                             <td> <span
                                                     class="product-names"><?php echo $row->brand_description;?></span>
                                             </td>

                                             <td>
                                                 <div class="product-names">
                                                     <p><?php if($row->is_active == 0) { echo 'Active'; } else { echo 'Inactive'; };?>
                                                     </p>
                                                 </div>
                                             </td>
                                             <td>
                                                 <ul class="action">
                                                     <li class="edit"> <a href="javascript:void(0)"
                                                             data-bs-toggle="modal" data-bs-target="#editdashboard8"
                                                             onclick=edit_brand(<?php echo $row->brand_id;?>)><i
                                                                 class="icon-pencil-alt"></i></a></li>
                                                     <li class="delete"><a href="#"><i class="fa fa-undo"
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 data-bs-original-title="Change Status Active Or Inactive"></i></a>
                                                     </li>
                                                 </ul>
                                             </td>
                                         </tr>

                                         <?php $cnt++; }
                                        }?>


                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Container-fluid Ends-->
     </div>
     <div class="col-sm-12">
         <div class="card">
             <div class="card-header card-no-border text-end">
                 <div class="card-header-right-icon">
                     <div class="modal fade" id="dashboard8" tabindex="-1" aria-labelledby="dashboard8"
                         aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered modal-lg">
                             <div class="modal-content category-popup">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="modaldashboard">Add Brand</h5>
                                     <button class="btn-close" type="button" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body p-0 custom-input">
                                     <div class="text-start">
                                         <div class="p-20">
                                             <form class="row g-3 needs-validation" novalidate=""
                                                 action="<?php echo base_url()?>brand/addBrand" method="post"
                                                 enctype="multipart/form-data">
                                                 <div class="col-md-6">
                                                     <label class="form-label" for="BrandName">Brand
                                                         Name<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="brandname" id="BrandName"
                                                         type="text" placeholder="Enter Brand name" required="">
                                                     <div class="invalid-feedback">
                                                         Please enter a Brand name.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-12">
                                                     <label class="form-label" for="brandimg">Brand Logo</label>
                                                     <input class="form-control" id="brandimg" type="file"
                                                         aria-label="file example" name="brand_image" required="">
                                                     <div class="invalid-feedback">Invalid form file selected</div>
                                                 </div>
                                                 <div class="col-md-12">
                                                     <label class="form-label">Brand Description<span
                                                             class="txt-danger">*</span></label>
                                                     <textarea id="editor1" class="form-control" name="brand_desc"
                                                         cols="30" rows="5"></textarea>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label">Brand Status<span
                                                             class="txt-danger">*</span></label>
                                                     <select class="form-select" name="brandstatus"
                                                         aria-label="Select brand status" required="">
                                                         <option selected="" value="0">Active</option>
                                                         <option value="1">Inactive</option>
                                                     </select>
                                                     <div class="invalid-feedback">
                                                         Please choose a Brand status.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>


                                                 <div class="col-md-12 d-flex justify-content-end">
                                                     <button class="btn btn-primary" type="submit">Create +</button>
                                                 </div>
                                             </form>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-sm-12">
         <div class="card">
             <div class="card-header card-no-border text-end">
                 <div class="card-header-right-icon">
                     <div class="modal fade" id="editdashboard8" tabindex="-1" aria-labelledby="editdashboard8"
                         aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered modal-lg">
                             <div class="modal-content category-popup">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="modaldashboard">Update Brand</h5>
                                     <button class="btn-close" type="button" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body p-0 custom-input">
                                     <div class="text-start">
                                         <div class="p-20">
                                             <form class="row g-3 needs-validation" novalidate=""
                                                 action="<?php echo base_url()?>brand/editbrand" method="post"
                                                 enctype="multipart/form-data">
                                                 <div class="col-md-6">
                                                    <input type="hidden" name="brand_id" id="brand_id">
                                                     <label class="form-label" for="e_BrandName">Brand
                                                         Name<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="e_brandname" id="e_BrandName"
                                                         type="text" placeholder="Enter Brand name" required="">
                                                     <div class="invalid-feedback">
                                                         Please enter a Brand name.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-12">
                                                     <label class="form-label" for="e_brandimg">Brand Logo</label>
                                                     <input class="form-control" id="e_brandimg" type="file"
                                                         aria-label="file example" name="e_brand_image">
                                                     <div class="invalid-feedback">Invalid form file selected</div>
                                                     <input type="hidden" name="e_image_name" id="e_image_name">
                                                     <img src="" width="50" height="50">
                                                 </div>
                                                 <div class="col-md-12">
                                                     <label class="form-label">Brand Description<span
                                                             class="txt-danger">*</span></label>
                                                     <textarea id="editor1" class="form-control" name="e_brand_desc"
                                                         cols="30" rows="5"></textarea>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label">Brand Status<span
                                                             class="txt-danger">*</span></label>
                                                     <select class="form-select" name="brandstatus"
                                                         aria-label="Select brand status" required="">
                                                         <option selected="" value="0">Active</option>
                                                         <option value="1">Inactive</option>
                                                     </select>
                                                     <div class="invalid-feedback">
                                                         Please choose a Brand status.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>


                                                 <div class="col-md-12 d-flex justify-content-end">
                                                     <button class="btn btn-primary" type="submit">Update +</button>
                                                 </div>
                                             </form>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <?php
        include_once(APPPATH.'views/includes/footer.php');
    ?>
             <script src="<?php echo base_url('assets/js/datatable/datatables/jquery.dataTables.min.js')?>"></script>
             <script src="<?php echo base_url('assets/js/datatable/datatables/dataTables.js')?>"></script>
             <script src="<?php echo base_url('assets/js/datatable/datatables/dataTables.select.js')?>"></script>
             <script src="<?php echo base_url('assets/js/datatable/datatables/select.bootstrap5.js')?>"></script>
             <script src="<?php echo base_url('assets/js/datatable/datatables/datatable.custom.js')?>"></script>
             <script src="<?php echo base_url('assets/js/sweet-alert/sweetalert.min.js')?>"></script>
             <script src="<?php echo base_url('assets/js/trash_popup.js')?>"></script>
             <script src="<?php echo base_url('assets/js/js-datatables/simple-datatables@latest.js')?>"></script>
             <script src="<?php echo base_url('assets/js/custom-list-product.js')?>"></script>
             <script src="<?php echo base_url('assets/js/ecommerce.js')?>"></script>
             <script src="<?php echo base_url('assets/js/editors/quill.js')?>"></script>
             <script src="<?php echo base_url('assets/js/tooltip-init.js')?>"></script>

             <script>
             var editor10 = new Quill("#editor10", {
                 modules: {
                     toolbar: "#toolbar10"
                 },
                 theme: "snow",
                 placeholder: "Enter your messages...",
             });

             function edit_brand(id) {
                         $('input[name=brand_id]').val(id);
                         $.ajax({
                             url: '<?php echo base_url() . 'brand/brand_edit'; ?>',
                             method: 'post',
                             dataType: 'json',
                             data: {
                                 'id': id
                             },
                             success: function(data) {
                                 $('input[name=e_brandname]').val(data.branddetails['brand_name']);
                                 $('textarea#editor1').val(data.branddetails['brand_description']);
                                 $('input[name=e_image_name]').val(data.branddetails['brand_logo']);
                                 $('#editdashboard8 img').attr("src","<?php echo COMPANY_SITE;?>assets/uploads/brand/"+data.branddetails['brand_logo']);
                             }
                         });
                     }
             </script>