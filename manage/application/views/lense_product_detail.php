 <!-- Page Header Start-->
 <?php
            include_once(APPPATH.'views/includes/header.php');
        ?>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/vendors/dropzone.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/vendors/filepond.css">
 <link rel="stylesheet" type="text/css"
     href="<?php echo base_url();?>assets/css/vendors/filepond-plugin-image-preview.css">
 <!-- Page Header Ends -->
 <!-- Page Body Start-->
 <div class="page-body-wrapper">
     <!-- Page Sidebar Start-->
     <?php
            include_once(APPPATH.'views/includes/sidebar.php');
        ?>
     <div class="page-body">
         <div class="container-fluid">
             <div class="page-title">
                 <div class="row">
                     <div class="col-6">
                         <h4>Lenses Product Detail</h4>
                     </div>
                     <div class="col-6">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.html">
                                     <svg class="stroke-icon">
                                         <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                     </svg></a></li>
                             <li class="breadcrumb-item">Lenses Product</li>
                             <li class="breadcrumb-item active">Product detail</li>
                         </ol>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Container-fluid starts-->
         <div class="container-fluid">
             <div class="row">
                 <!-- Zero Configuration  Starts-->
                 <div class="col-sm-12">
                     <div class="card">
                         <div class="card-header pb-0 card-no-border">
                             <h4>Product Detail</h4>
                         </div>
                         <div class="card-body">
                            <div class="list-product-header">
                                 <div>
                                     <a class="btn btn-primary f-w-500" href="<?php echo base_url();?>contact_lenses/add_lenses_product"><i class="fa fa-plus pe-2"></i>Add Lenses Product</a>
                                     <a class="btn btn-primary f-w-500" href="javascript:void(0)" data-bs-toggle="modal"
                                         data-bs-target="#uploadfile"><i class="fa fa-plus pe-2"></i>Upload Product</a>
                                         <a class="btn btn-primary f-w-500" href="<?php echo base_url('assets/dndfile-sample_len.csv'); ?>"><i class="fa fa-plus pe-2"></i>Semple Download</a>
                                 </div>
                                 
                             </div>
                             <div class="table-responsive">
                                 <table class="display" id="basic-1">
                                     <thead>
                                         <tr>
                                             <th>No</th>
                                             <th>Title</th>
                                             <th>Lense Category</th>
                                             <th>Lense SubCategory</th>
                                             <th>Image</th>
                                             <th>Status</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php if(count($lenseproductlist)){
                            $cnt=1; 
                                  foreach($lenseproductlist as $row){  
                          ?>
                                         <tr>
                                             <td><?php echo $cnt;?></td>
                                             <td><?php echo $row->lp_name;?></td>
                                             <td><?php echo $row->lense_cat_name;?></td>
                                             <td><?php echo $row->lenses_cat_type;?></td>
                                             <td><img src="<?php echo COMPANY_SITE.'assets/uploads/lenses_product/'.$row->lp_image;?>"
                                                     width="50" height="50"></td>
                                             <td><?php if($row->is_active == 0) { echo "Active";} else { echo "Inactive";}?>
                                             </td>
                                             <td>
                                                 <ul class="action">
                                                     <li class="edit">
                                                         <a class="btn f-w-500 p-0" href="javascript:void(0)" data-bs-toggle="modal"
                                                             data-bs-target="#dashboard8"
                                                             onclick=add_pro_img(<?php echo $row->lp_id;?>)><i
                                                                 class="icon-image fs-3"></i></a>
                                                     </li>
                                                     <li class="edit">
                                                         <a class="btn f-w-500 p-0" href="javascript:void(0)"
                                                             data-bs-toggle="modal" data-bs-target="#pdetail" onclick=add_pro_specification(<?php echo $row->lp_id;?>)><i
                                                                 class="fa fa-plus fs-3"></i></a>
                                                     </li>
                                                     <li class="edit"> <a
                                                             href="<?php echo base_url()?>product/editproduct/<?php echo $row->lp_id;?>"><i
                                                                 class="icon-pencil-alt fs-3"></i></a></li>
                                                     <li class="delete"><a
                                                             href="<?php echo base_url()?>product/deleteproduct/<?php echo $row->lp_id;?>"><i
                                                                 class="icon-trash fs-3"></i></a>

                                                     </li>
                                                 </ul>
                                             </td>
                                         </tr>
                                         <?php $cnt++;  } } ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- Zero Configuration  Ends-->
             </div>
         </div>
     </div>

     <div class="col-sm-12">
         <div class="card">
             <div class="card-header card-no-border text-end">
                 <div class="card-header-right-icon">
                     <div class="modal fade" id="dashboard8" role="dialog" tabindex="-1" aria-labelledby="dashboard8"
                         aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered modal-lg">
                             <div class="modal-content category-popup">
                                 <div class="modal-body p-0 custom-input">

                                     <!-- Container-fluid starts-->
                                     <div class="container-fluid">
                                         <div class="row">
                                             <div class="col-lg-12">
                                                 <div class="card">
                                                     <div class="card-header text-start">
                                                         <h4>Product Lenses Gallary</h4>
                                                     </div>
                                                     <div class="card-body">
                                                         <form class="dropzone dropzone-secondary" id="multiFileUpload"
                                                             action="<?php echo base_url('contact_lenses/uploadgallary') ?>"
                                                             method="post" enctype="multipart/form-data">
                                                             <input type="hidden" name="product_id" id="product_id">
                                                             <div class="dz-message needsclick">
                                                                 <i class="icon-cloud-up"></i>
                                                                 <h6>Drop files here or click to upload.</h6><span
                                                                     class="note needsclick">(This is just a demo
                                                                     dropzone. Selected files are <strong>not</strong>
                                                                     actually uploaded.)</span>
                                                             </div>
                                                         </form>
                                                         <div class="col-md-12 d-flex justify-content-end">
                                                     <button class="btn btn-primary" id="submit-all">Upload +</button>
                                                 </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- Container-fluid Ends-->
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-sm-12">
                 <div class="card">
                     <div class="card-header card-no-border text-start">
                         <div class="card-header-right-icon">
                             <div class="modal fade" id="pdetail" role="dialog" tabindex="-1"
                                 aria-labelledby="pdetail" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered modal-lg">
                                     <div class="modal-content category-popup">
                                         <div class="modal-body p-0 custom-input">
                                             <!-- Container-fluid starts-->
                                             <div class="container-fluid">
                                                 <div class="row">
                                                     <div class="col-lg-12">
                                                         <div class="card">
                                                             <div class="card-header text-start">
                                                                 <h4>Product Specification</h4>
                                                             </div>
                                                             <div class="card-body">
                                                                <form class="row g-3 needs-validation" novalidate="" action="<?php echo base_url()?>contact_lenses/addlense_pro_specifination" method="post">
                                                                    <input type="hidden" name="product_id" id="product_id">
                                                                    <div class="col-md-4">
                                                                        <label class="form-label text-start" for="model_no">Model No</label>
                                                                        <input class="form-control" name="model_no" id="model_no"
                                                                            type="text" placeholder="Enter your Model No">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Model No.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label text-start" for="product_type">Product Type</label>
                                                                        <input class="form-control" name="product_type" id="product_type"
                                                                            type="text" placeholder="Enter your Product Type Type">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Product Type Type.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="type">Type</label>
                                                                        <input class="form-control" name="type" id="type"
                                                                            type="text" placeholder="Enter your Type Shape">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Type.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="manufacturer_details">Manufacturer Details</label>
                                                                        <input class="form-control" name="manufacturer_details" id="manufacturer_details"
                                                                            type="text" placeholder="Enter your Manufacturer Details">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Manufacturer Details.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="country_of_origin">Country Of Origin</label>
                                                                        <input class="form-control" name="country_of_origin" id="country_of_origin"
                                                                            type="text" placeholder="Enter your Country Of Origin">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Country Of Origin.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="base_curve">Base Curve</label>
                                                                        <input class="form-control" name="base_curve" id="base_curve"
                                                                            type="text" placeholder="Enter your Base Curve">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Base Curve.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="diameter">Diameter</label>
                                                                        <input class="form-control" name="diameter" id="diameter"
                                                                            type="text" placeholder="Enter your Diameter">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Diameter.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="lens_material">Lense Material</label>
                                                                        <input class="form-control" name="lens_material" id="lens_material"
                                                                            type="text" placeholder="Enter your Lense Material">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Lense Material.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="packaging">Packaging</label>
                                                                        <input class="form-control" name="packaging" id="packaging"
                                                                            type="text" placeholder="Enter your Packaging">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Packaging.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="usage_duration">Usage Duration</label>
                                                                        <input class="form-control" name="usage_duration" id="usage_duration"
                                                                            type="text" placeholder="Enter your Usage Duration">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Usage Duration.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="water_content">Water Content</label>
                                                                        <input class="form-control" name="water_content" id="water_content"
                                                                            type="text" placeholder="Enter your Water Content">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Water Content.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="gender">Gender<span class="txt-danger"></label>
                                                                        <input class="form-control" name="gender" id="gender"
                                                                            type="text" placeholder="Enter your Gender">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Gender.</div>
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
                                             <!-- Container-fluid Ends-->
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="modal fade text-left" id="uploadfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" data-backdrop="static" data-keyboard="false" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel3">Upload DND Number List</h4>
      </div>
      <div class="modal-body">
          <?php echo form_open_multipart('Contact_Lenses/uploaddndfile', array('id'=>'submitForm', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'novalidate'=>'novalidate')); ?>
            
            <div class="form-body">
              <div class="form-group">
                <h5>Upload File <span class="required">*</span></h5>
                <div class="controls">
                  <input type="file" name="smsfile" class="form-control" required data-validation-required-message="File is required" accept=".csv">
                  <div class="help-block font-small-3"></div>
                  <p class="text-muted font-small-2 mt-1">Upload file format .csv only</p>
                </div>
              </div>
            </div>

            <div class="form-actions text-right pb-0">
              <button type="button" class="btn grey btn-outline-light btn-min-width" data-bs-dismiss="modal">Close</button>
              <button type="submit" id="submit-btn" class="btn btn-success btn-min-width">Import</button>
            </div>
          <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
                     <footer class="footer">
                         <div class="container-fluid">
                             <div class="row">
                                 <div class="col-md-12 footer-copyright text-center">
                                     <p class="mb-0">Copyright 2024 © Infoloop Technologies </p>
                                 </div>
                             </div>
                         </div>
                     </footer>
                 </div>
             </div>

             <!-- latest jquery-->
             <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
             <!-- Bootstrap js-->
             <script src="<?php echo base_url('assets/js/bootstrap/bootstrap.bundle.min.js')?>"></script>
             <!-- feather icon js-->
             <script src="<?php echo base_url('assets/js/icons/feather-icon/feather.min.js')?>"></script>
             <script src="<?php echo base_url('assets/js/icons/feather-icon/feather-icon.js')?>"></script>
             <!-- scrollbar js-->
             <script src="<?php echo base_url('assets/js/scrollbar/simplebar.js')?>"></script>
             <script src="<?php echo base_url('assets/js/scrollbar/custom.js')?>"></script>
             <!-- Sidebar jquery-->
             <script src="<?php echo base_url('assets/js/config.js')?>"></script>
             <!-- Plugins JS start-->
             <script src="<?php echo base_url('assets/js/sidebar-menu.js')?>"></script>
             <script src="<?php echo base_url('assets/js/sidebar-pin.js')?>"></script>
             <script src="<?php echo base_url('assets/js/slick/slick.min.js')?>"></script>
             <script src="<?php echo base_url('assets/js/slick/slick.js')?>"></script>
             <script src="<?php echo base_url('assets/js/header-slick.js')?>"></script>
             <script src="<?php echo base_url('assets/js/dropzone/dropzone.js')?>"></script>
             <script src="<?php echo base_url('assets/js/dropzone/dropzone-script.js')?>"></script>
             <script src="<?php echo base_url('assets/js/filepond/filepond-plugin-image-preview.js')?>"></script>
             <script src="<?php echo base_url('assets/js/filepond/filepond-plugin-file-rename.js')?>"></script>
             <script src="<?php echo base_url('assets/js/filepond/filepond-plugin-image-transform.js')?>"></script>
             <script src="<?php echo base_url('assets/js/filepond/filepond.js')?>"></script>
             <script src="<?php echo base_url('assets/js/filepond/custom-filepond.js')?>"></script>
             <script src="<?php echo base_url('assets/js/tooltip-init.js')?>"></script>

             <script src="<?php echo base_url('assets/js/datatable/datatables/jquery.dataTables.min.js')?>"></script>
             <script src="<?php echo base_url('assets/js/datatable/datatables/datatable.custom.js')?>"></script>
             <!-- Plugins JS Ends-->
             <!-- Theme js-->
             <script src="<?php echo base_url('assets/js/script.js')?>"></script>
             <script>

    function add_pro_specification(id)
    {
        $('input[name=product_id]').val(id);
    }

    function add_pro_img(id)
    {
        $('input[name=product_id]').val(id);
    }


             Dropzone.options.multiFileUpload = {
                autoProcessQueue: false,
                uploadMultiple: true,
                parallelUploads: 10,
                maxFilesize: 5, // MB
                acceptedFiles: 'image/*',
                init: function() {
                    var submitButton = document.querySelector("#submit-all")
                    multiFileUpload = this; // closure

                    submitButton.addEventListener("click", function() {
                        multiFileUpload.processQueue(); // process the queue
                    });

                    this.on("complete", function() {
                        if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                        var _this = this;
                        _this.removeAllFiles();
                        }
                    });

                    this.on("success", function(file, response) {
                        console.log(response);
                    });
                }
            };
             </script>
             <script type="text/javascript">
$(document).ready(function(){

  $('#submitForm').on('submit', function(event){
    event.preventDefault();

    $.ajax({
      url : $(this).attr('action') || window.location.pathname,
      method:"POST",
      data:new FormData(this),
      dataType: "JSON",
      contentType: false,
      cache: false,
      processData: false,
      beforeSend:function(){
        $('#submit-btn').html('Importing...');
        $('#submit-btn').attr('disabled', true);
      },
      success:function(response){
        if(response['success'] == true) {
            $('#submitForm')[0].reset();
            $('#submit-btn').attr('disabled', false);
            $('#submit-btn').html('Import Done');
            
            toastr.success(response['message']);
            setTimeout(function() {
               location.reload();
            }, 2000);
        }
        else {
          toastr.error(response['message']);
        }
      },
      error: function (jXHR, textStatus, errorThrown) {
          $('#submit-btn').attr('disabled', false);
          $('#submit-btn').html('Import');
          toastr.error(errorThrown, 'ERROR');
      }
    })
  });
  
});
</script>
             </body>

             </html>