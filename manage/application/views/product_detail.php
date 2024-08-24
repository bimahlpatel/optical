 <!-- Page Header Start-->
 <?php
            include_once(APPPATH.'views/includes/header.php');
        ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/vendors/dropzone.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/vendors/filepond.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/vendors/filepond-plugin-image-preview.css">
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
                            <td><img src="<?php echo COMPANY_SITE.'assets/uploads/product/'.$row->product_image;?>" width="50" height="50"></td>
                            <td><?php if($row->isActive == 1) { echo "Active";} else { echo "Inactive";}?></td>
                            <td> 
                              <ul class="action">
                                <li class="edit">
                                <a href="javascript:void(0)" data-bs-toggle="modal" class="openModalLink" data-value="<?php echo $row->product_id;?>"><i class="icon-image fs-3"></i></a>

                              </li> 
                                <li class="edit"> <a href="<?php echo base_url()?>product/editproduct/<?php echo $row->product_id;?>"><i class="icon-pencil-alt fs-3"></i></a></li>
                                <li class="delete"><a href="<?php echo base_url()?>product/deleteproduct/<?php echo $row->product_id;?>"><i class="icon-trash fs-3"></i></a>
                                    
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
                                              <form class="dropzone dropzone-secondary" id="multiFileUpload" action="<?php echo base_url('product/uploadgallary') ?>" method="post" enctype="multipart/form-data">
                                                <input type="hidden" id="imageid">
                                                <div class="dz-message needsclick">
                                                  <i class="icon-cloud-up"></i>
                                                  <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
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


        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2024 © Infoloop Technologies  </p>
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
  Dropzone.options.multiFileUpload = {
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 2, // MB
    acceptedFiles: ".jpeg,.jpg,.png,.gif",
    uploadMultiple: true,
    parallelUploads: 10,
    maxFiles: 10,
    success: function(file, response) {
      console.log('File uploaded successfully.');
    },
    error: function(file, response) {
      console.log('File upload failed.');
    }
  };

  var openModalLinks = document.querySelectorAll(".openModalLink");
  var modal = document.getElementById("dashboard8");
// Loop through all links and add click event listeners
openModalLinks.forEach(function(link) {
    link.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default link behavior
        var dynamicValue = this.getAttribute("data-value"); // Get the dynamic value from data attribute
        $('#imageid').val(dynamicValue);
        modal.style.display = "block"; // Show the modal
        $('#dashboard8').addclass('show'); // Show the modal
    });
});
</script>
  </body>
</html>