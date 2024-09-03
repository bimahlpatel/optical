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
                             Display Lense SubCategory</h4>
                     </div>
                     <div class="col-6">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.html">
                                     <svg class="stroke-icon">
                                         <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-home">
                                         </use>
                                     </svg></a></li>
                             <li class="breadcrumb-item">Lenses</li>
                             <li class="breadcrumb-item active">SubCategory</li>
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
                                     <div class="light-box"><a data-bs-toggle="collapse" href="#collapseProduct"
                                             role="button" aria-expanded="false" aria-controls="collapseProduct"><i
                                                 class="filter-icon show" data-feather="filter"></i><i
                                                 class="icon-close filter-close hide"></i></a></div><a
                                         class="btn btn-primary f-w-500" href="javascript:void(0)"
                                         data-bs-toggle="modal" data-bs-target="#dashboard8"><i
                                             class="fa fa-plus pe-2"></i>Add Lense SubCategory</a>
                                 </div>

                             </div>
                             <div class="list-product list-category">
                                 <table class="table" id="project-status">
                                     <thead>
                                         <tr>
                                             <th>
                                                 <div class="form-check">
                                                     <input class="form-check-input checkbox-primary" type="checkbox">
                                                 </div>
                                             </th>
                                             <th> <span class="f-light f-w-600">Category</span></th>
                                             <th> <span class="f-light f-w-600">Parent Category</span></th>
                                             <th> <span class="f-light f-w-600">Status</span></th>
                                             <th> <span class="f-light f-w-600">Action</span></th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php if(count($ls_subcategorylist)){
                                            foreach($ls_subcategorylist as $row){?>

                                         <tr class="product-removes">
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input checkbox-primary" type="checkbox">
                                                 </div>
                                             </td>
                                             <td>
                                                 <div class="product-names">
                                                     <p><?php echo $row->lenses_cat_type;?></p>
                                                 </div>
                                             </td>
                                             <td>
                                                 <div class="product-names">
                                                     <p><?php echo $row->lense_cat_name;?></p>
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
                                                             onclick=edit_subcategory(<?php echo $row->sub_category_id;?>)><i
                                                                 class="icon-pencil-alt"></i></a></li>
                                                     <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                                 </ul>
                                             </td>
                                         </tr>

                                         <?php }
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
                                     <h5 class="modal-title" id="modaldashboard">Add Lense SubCategories</h5>
                                     <button class="btn-close" type="button" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body p-0 custom-input">
                                     <div class="text-start">
                                         <div class="p-20">
                                             <form class="row g-3 needs-validation" novalidate=""
                                                 action="<?php echo base_url()?>Contact_Lenses/addlensesubCategory" method="post">
                                                 <div class="col-md-6">
                                                     <label class="form-label" for="CategoryName">SubCategory
                                                         Name<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="categoryname" id="CategoryName"
                                                         type="text" placeholder="Enter your subcategory name" required="">
                                                     <div class="invalid-feedback">
                                                         Please enter a category name.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-12">
                                                     <label class="form-label">Lense Category<span
                                                             class="txt-danger">*</span></label>
                                                     <select class="form-select" name="parentcategory"
                                                         aria-label="Select parent category" required="">
                                                         <option value="">Select</option>
                                                         <?php foreach($ls_category_master as $cat){?>
                                                         <option value="<?php echo $cat->lense_cat_id;?>"><?php echo $cat->lense_cat_name;?>
                                                         </option>
                                                         <?php } ?>
                                                     </select>
                                                     <div class="invalid-feedback">
                                                         Please choose a Lenses category.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label">Category Status<span
                                                             class="txt-danger">*</span></label>
                                                     <select class="form-select" name="categorystatus"
                                                         aria-label="Select category status" required="">
                                                         <option selected="">Active</option>
                                                         <option value="1">Inactive</option>
                                                     </select>
                                                     <div class="invalid-feedback">
                                                         Please choose a category status.</div>
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
                                     <h5 class="modal-title" id="modaldashboard">Update Lense SubCategories</h5>
                                     <button class="btn-close" type="button" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body p-0 custom-input">
                                     <div class="text-start">
                                         <div class="p-20">
                                             <form class="row g-3 needs-validation" novalidate=""
                                                 action="<?php echo base_url()?>Contact_Lenses/updatelensesubCategory" method="post">
                                                 <div class="col-md-6">
                                                 <input type="hidden" name="sub_cat_id" id="sub_cat_id">
                                                     <label class="form-label" for="e_categoryname">SubCategory
                                                         Name<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="e_categoryname" id="e_categoryname"
                                                         type="text" placeholder="Enter your subcategory name" required="">
                                                     <div class="invalid-feedback">
                                                         Please enter a category name.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-12">
                                                     <label class="form-label">Lense Category<span
                                                             class="txt-danger">*</span></label>
                                                     <select class="form-select" name="e_parentcategory"
                                                         aria-label="Select parent category" required="">
                                                         <option value="">Select</option>
                                                         <?php foreach($ls_category_master as $cat){?>
                                                         <option value="<?php echo $cat->lense_cat_id;?>"><?php echo $cat->lense_cat_name;?>
                                                         </option>
                                                         <?php } ?>
                                                     </select>
                                                     <div class="invalid-feedback">
                                                         Please choose a Lenses category.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label">Category Status<span
                                                             class="txt-danger">*</span></label>
                                                     <select class="form-select" name="e_categorystatus"
                                                         aria-label="Select category status" required="">
                                                         <option value="0">Active</option>
                                                         <option value="1">Inactive</option>
                                                     </select>
                                                     <div class="invalid-feedback">
                                                         Please choose a category status.</div>
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

             <script>
             var editor10 = new Quill("#editor10", {
                 modules: {
                     toolbar: "#toolbar10"
                 },
                 theme: "snow",
                 placeholder: "Enter your messages...",
             });

             function edit_subcategory(id) {
                         $('input[name=sub_cat_id]').val(id);
                         $.ajax({
                             url: '<?php echo base_url() . 'Contact_Lenses/editlensesubCategory'; ?>',
                             method: 'post',
                             dataType: 'json',
                             data: {
                                 'id': id
                             },
                             success: function(data) {
                                 $('input[name=e_categoryname]').val(data.lense_sub_category['lenses_cat_type']);
                                 

                             }
                         });
                     }
             </script>