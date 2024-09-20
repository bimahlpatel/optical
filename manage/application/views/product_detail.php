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
                         <h4>Product</h4>
                     </div>
                     <div class="col-6">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.html">
                                     <svg class="stroke-icon">
                                         <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                     </svg></a></li>
                             <li class="breadcrumb-item">Product</li>
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
                                     <a class="btn btn-primary f-w-500" href="javascript:void(0)" data-bs-toggle="modal"
                                         data-bs-target="#uploadfile"><i class="fa fa-plus pe-2"></i>Upload Product</a>
                                         <a class="btn btn-primary f-w-500" href="<?php echo base_url('assets/dndfile-sample.csv'); ?>"><i class="fa fa-plus pe-2"></i>Semple Download</a>
                                 </div>
                             </div>
                             <div class="table-responsive">
                                 <table class="display" id="basic-1">
                                     <thead>
                                         <tr>
                                             <th>No</th>
                                             <th>Product Title</th>
                                             <th>Product Sku</th>
                                             <th>Product Category</th>
                                             <th>Product Image</th>
                                             <th>Status</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php if(count($productlist)){
                            $cnt=1; 
                                  foreach($productlist as $row){  
                          ?>
                                         <tr>
                                             <td><?php echo $cnt;?></td>
                                             <td><?php echo $row->product_title;?></td>
                                             <td><?php echo $row->product_sku;?></td>
                                             <td><?php echo $row->category_name;?></td>
                                             <td><img src="<?php echo COMPANY_SITE.'assets/uploads/product/'.$row->product_image;?>"
                                                     width="50" height="50"></td>
                                             <td><?php if($row->isActive == 1) { echo "Active";} else { echo "Inactive";}?>
                                             </td>
                                             <td>
                                                 <ul class="action">
                                                     <li class="edit">
                                                         <a class="btn f-w-500 p-0" href="javascript:void(0)" data-bs-toggle="modal"
                                                             data-bs-target="#dashboard8"
                                                             onclick=add_pro_img(<?php echo $row->product_id;?>)><i
                                                                 class="icon-image fs-3"></i></a>
                                                     </li>
                                                     <li class="edit">
                                                         <a class="btn f-w-500 p-0" href="javascript:void(0)"
                                                             data-bs-toggle="modal" data-bs-target="#pdetail" onclick=add_pro_specification(<?php echo $row->product_id;?>)><i
                                                                 class="fa fa-plus fs-3"></i></a>
                                                     </li>
                                                     <li class="edit"> <a
                                                             href="<?php echo base_url()?>product/editproduct/<?php echo $row->product_id;?>"><i
                                                                 class="icon-pencil-alt fs-3"></i></a></li>
                                                     <li class="delete"><a
                                                             href="<?php echo base_url()?>product/deleteproduct/<?php echo $row->product_id;?>"><i
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
                                                         <h4>Product Gallary</h4>
                                                     </div>
                                                     <div class="card-body">
                                                         <form class="dropzone dropzone-secondary" id="multiFileUpload"
                                                             action="<?php echo base_url('product/uploadgallary') ?>"
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
                                                                <form class="row g-3 needs-validation" novalidate="" action="<?php echo base_url()?>product/addproduct_specifination" method="post">
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
                                                                        <label class="form-label text-start" for="frame_type">Frame Type</label>
                                                                        <input class="form-control" name="frame_type" id="frame_type"
                                                                            type="text" placeholder="Enter your Frame Type">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Frame Type.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="frame_shape">Frame Shape</label>
                                                                        <input class="form-control" name="frame_shape" id="frame_shape"
                                                                            type="text" placeholder="Enter your Frame Shape">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Frame Shape.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="frame_size">Frame Size</label>
                                                                        <input class="form-control" name="frame_size" id="frame_size"
                                                                            type="text" placeholder="Enter your Frame Size">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Frame Size.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="frame_width">Frame Width</label>
                                                                        <input class="form-control" name="frame_width" id="frame_width"
                                                                            type="text" placeholder="Enter your Frame Width">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Frame Width.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="frame_dimensions">Frame Dimensions</label>
                                                                        <input class="form-control" name="frame_dimensions" id="frame_dimensions"
                                                                            type="text" placeholder="Enter your Frame Dimensions">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Frame Dimensions.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="frame_colour">Frame colour</label>
                                                                        <input class="form-control" name="frame_colour" id="frame_colour"
                                                                            type="text" placeholder="Enter your Frame colour">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Frame colour.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="weight">Weight</label>
                                                                        <input class="form-control" name="weight" id="weight"
                                                                            type="text" placeholder="Enter your Weight">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Weight.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="weight_group">Weight Group</label>
                                                                        <input class="form-control" name="weight_group" id="weight_group"
                                                                            type="text" placeholder="Enter your Weight Group">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Weight Group.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="material">Material</label>
                                                                        <input class="form-control" name="material" id="material"
                                                                            type="text" placeholder="Enter your Material">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Material.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="frame_material">Frame Material</label>
                                                                        <input class="form-control" name="frame_material" id="frame_material"
                                                                            type="text" placeholder="Enter your Frame Material">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Frame Material.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="temple_material">Temple Material<span class="txt-danger"></label>
                                                                        <input class="form-control" name="temple_material" id="temple_material"
                                                                            type="text" placeholder="Enter your Temple Material">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Temple Material.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="prescription_type">Prescription Type</label>
                                                                        <input class="form-control" name="prescription_type" id="prescription_type"
                                                                            type="text" placeholder="Enter your Prescription Type">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Prescription Type.</div>
                                                                        <div class="valid-feedback">Looks good!</div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-label" for="frame_style">Frame Style</label>
                                                                        <input class="form-control" name="frame_style" id="frame_style"
                                                                            type="text" placeholder="Enter your Frame Style">
                                                                        <div class="invalid-feedback">
                                                                            Please enter a Frame Style.</div>
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
                     <!-- Modal -->
<div class="modal fade text-left" id="uploadfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" data-backdrop="static" data-keyboard="false" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel3">Upload DND Number List</h4>
      </div>
      <div class="modal-body">
          <?php echo form_open_multipart('product/uploaddndfile', array('id'=>'submitForm', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'novalidate'=>'novalidate')); ?>
            
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