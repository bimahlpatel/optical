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
                             Display Store Locator</h4>
                     </div>
                     <div class="col-6">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.html">
                                     <svg class="stroke-icon">
                                         <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-home">
                                         </use>
                                     </svg></a></li>
                             <li class="breadcrumb-item active">Store Locator</li>
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
                                     <a class="btn btn-primary f-w-500" href="javascript:void(0)" data-bs-toggle="modal"
                                         data-bs-target="#dashboard8"><i class="fa fa-plus pe-2"></i>Add Store Detail</a>
                                 </div>

                             </div>
                             <div class="list-product list-category">
                                 <table class="table" id="project-status">
                                     <thead>
                                         <tr>
                                             <th><span class="f-light f-w-600">No</span></th>
                                             <th><span class="f-light f-w-600">Store Name</span></th>
                                             <th><span class="f-light f-w-600">Store Email</span></th>
                                             <th><span class="f-light f-w-600">Store Conatact</span></th>
                                             <th><span class="f-light f-w-600">Store Address</span></th>
                                             <th><span class="f-light f-w-600">Status</span></th>
                                             <th><span class="f-light f-w-600">Action</span></th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php if(count($storedetails)){
                                            $cnt = 1;
                                            foreach($storedetails as $row){?>

                                         <tr class="product-removes">
                                             <td>
                                                 <?php echo $cnt;?>
                                             </td>
                                             <td>
                                                 <div class="product-names">
                                                     <p><?php echo $row->store_name;?></p>
                                                 </div>
                                             </td>
                                             <td>
                                                 <div class="product-names">
                                                     <p><?php echo $row->store_email;?></p>
                                                 </div>
                                             </td>
                                             <td>
                                                 <div class="product-names">
                                                     <p><?php echo $row->store_contactno;?></p>
                                                 </div>
                                             </td>
                                             <td>
                                                 <div class="product-names">
                                                     <p><?php echo $row->store_address;?></p>
                                                 </div>
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
                                                             onclick=edit_store(<?php echo $row->store_id;?>)><i
                                                                 class="icon-pencil-alt"></i></a></li>
                                                 </ul>
                                             </td>
                                         </tr>

                                         <?php $cnt++ ;}
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
                                     <h5 class="modal-title" id="modaldashboard">Add Store</h5>
                                     <button class="btn-close" type="button" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body p-0 custom-input">
                                     <div class="text-start">
                                         <div class="p-20">
                                             <form class="row g-3 needs-validation" novalidate=""
                                                 action="<?php echo base_url()?>site/addstore"
                                                 method="post">
                                                 <div class="col-md-6">
                                                     <label class="form-label" for="storename">Store
                                                         Name<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="storename" id="storename"
                                                         type="text" placeholder="Enter your store name" required="">
                                                     <div class="invalid-feedback">
                                                         Please enter a store name.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label" for="storeemail">Store
                                                         Email<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="storeemail" id="storeemail"
                                                         type="email" placeholder="Enter your store email" required="">
                                                     <div class="invalid-feedback">
                                                         Please enter a store email.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label" for="storecontact">Store
                                                         Contact<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="storecontact" id="storecontact"
                                                         type="text" placeholder="Enter your store contact" required="">
                                                     <div class="invalid-feedback">
                                                         Please enter a store contact.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-12">
                                                    <label class="form-label">Store Address<span
                                                            class="txt-danger">*</span></label>
                                                    <textarea id="editor1" class="form-control" name="store_address" cols="30"
                                                        rows="5"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="form-label">Store Location<span
                                                            class="txt-danger">*</span></label>
                                                    <textarea id="editor2" class="form-control" name="store_location" cols="30"
                                                        rows="5"></textarea>
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
                                             <h5 class="modal-title" id="modaldashboard">Update Store</h5>
                                             <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                 aria-label="Close"></button>
                                         </div>
                                         <div class="modal-body p-0 custom-input">
                                             <div class="text-start">
                                                 <div class="p-20">
                                                 <form class="row g-3 needs-validation" novalidate=""
                                                 action="<?php echo base_url()?>site/updatestore"
                                                 method="post">
                                                 <div class="col-md-6">
                                                 <input name="storeid" id="storeid" type="hidden" required="" value="">
                                                     <label class="form-label" for="e_storename">Store
                                                         Name<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="e_storename" id="e_storename"
                                                         type="text" placeholder="Enter your store name" required="">
                                                     <div class="invalid-feedback">
                                                         Please enter a store name.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label" for="e_storeemail">Store
                                                         Email<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="e_storeemail" id="e_storeemail"
                                                         type="email" placeholder="Enter your store email" required="">
                                                     <div class="invalid-feedback">
                                                         Please enter a store email.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label" for="e_storecontact">Store
                                                         Contact<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="e_storecontact" id="e_storecontact"
                                                         type="text" placeholder="Enter your store contact" required="">
                                                     <div class="invalid-feedback">
                                                         Please enter a store contact.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-12">
                                                    <label class="form-label">Store Address<span
                                                            class="txt-danger">*</span></label>
                                                    <textarea id="editor1" class="form-control" name="e_store_address" cols="30"
                                                        rows="5"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="form-label">Store Location<span
                                                            class="txt-danger">*</span></label>
                                                    <textarea id="editor2" class="form-control" name="e_store_location" cols="30"
                                                        rows="5"></textarea>
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
                     <script src="<?php echo base_url('assets/js/datatable/datatables/jquery.dataTables.min.js')?>">
                     </script>
                     <script src="<?php echo base_url('assets/js/datatable/datatables/dataTables.js')?>"></script>
                     <script src="<?php echo base_url('assets/js/datatable/datatables/dataTables.select.js')?>">
                     </script>
                     <script src="<?php echo base_url('assets/js/datatable/datatables/select.bootstrap5.js')?>">
                     </script>
                     <script src="<?php echo base_url('assets/js/datatable/datatables/datatable.custom.js')?>"></script>
                     <script src="<?php echo base_url('assets/js/sweet-alert/sweetalert.min.js')?>"></script>
                     <script src="<?php echo base_url('assets/js/trash_popup.js')?>"></script>
                     <script src="<?php echo base_url('assets/js/js-datatables/simple-datatables@latest.js')?>">
                     </script>
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

                     function edit_store(id) {
                         $('input[name=storeid]').val(id);
                         $.ajax({
                             url: '<?php echo base_url() . 'site/get_store_ByID'; ?>',
                             method: 'post',
                             dataType: 'json',
                             data: {
                                 'id': id
                             },
                             success: function(data) {
                                 $('input[name=e_storename]').val(data.storedetails['store_name']);
                                 $('input[name=e_storeemail]').val(data.storedetails['store_email']);
                                 $('input[name=e_storecontact]').val(data.storedetails['store_contactno']);
                                 $('textarea#editor1').val(data.storedetails['store_address']);
                                 $('textarea#editor2').val(data.storedetails['store_location']);

                             }
                         });
                     }
                     </script>