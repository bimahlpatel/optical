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
                             Display Seo</h4>
                     </div>
                     <div class="col-6">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.html">
                                     <svg class="stroke-icon">
                                         <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-home">
                                         </use>
                                     </svg></a></li>
                             <li class="breadcrumb-item active">Seo Meta Keyword</li>
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
                                             class="fa fa-plus pe-2"></i>Add Seo Meta</a>
                                 </div>

                             </div>
                             <div class="list-product list-category">
                                 <table class="table" id="project-status">
                                     <thead>
                                         <tr>
                                             <th><span class="f-light f-w-600">No</span></th>
                                             <th> <span class="f-light f-w-600">Slug</span></th>
                                             <th> <span class="f-light f-w-600">Title</span></th>
                                             <th> <span class="f-light f-w-600">Description</span></th>
                                             <th> <span class="f-light f-w-600">keywords</span></th>
                                             <th> <span class="f-light f-w-600">Action</span></th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php if(count($seolist)){
                                            $cnt=1; 
                                            foreach($seolist as $row){?>

                                         <tr class="product-removes">
                                             <td>
                                                 <div class="form-check">
                                                     <p><?php echo $cnt;?></p>
                                                 </div>
                                             </td>
                                             <td>
                                                 <div class="product-names">
                                                     <p><?php echo $row->slug;?></p>
                                                 </div>
                                             </td>
                                             <td>
                                                 <div class="product-names">
                                                    <p><?php echo $row->title;?></p>
                                                 </div>
                                             </td>
                                             <td> <span
                                                     class="product-names"><?php echo $row->descriptions;?></span>
                                             </td>

                                             <td>
                                                 <div class="product-names">
                                                     <p><?php echo $row->keywords;?></p>
                                                 </div>
                                             </td>
                                             <td>
                                                 <ul class="action">
                                                     <li class="edit"> <a href="javascript:void(0)"
                                                             data-bs-toggle="modal" data-bs-target="#editdashboard8"
                                                             onclick=edit_seo(<?php echo $row->id;?>)><i
                                                                 class="icon-pencil-alt"></i></a></li>
                                                     <!--<li class="delete"><a href="#"><i class="fa fa-undo"
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 data-bs-original-title="Change Status Active Or Inactive"></i></a>-->
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
                                     <h5 class="modal-title" id="modaldashboard">Add Seo MetaKeyword</h5>
                                     <button class="btn-close" type="button" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body p-0 custom-input">
                                     <div class="text-start">
                                         <div class="p-20">
                                             <form class="row g-3 needs-validation" novalidate=""
                                                 action="<?php echo base_url()?>seo_meta_keyword/addSeoMetakeword" method="post"
                                                 enctype="multipart/form-data">
                                                 <div class="col-md-6">
                                                     <label class="form-label" for="slug">Slug<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="slug" id="slug"
                                                         type="text" placeholder="Enter slug name" required="">
                                                     <div class="invalid-feedback">
                                                         Please enter a slug name.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label" for="title">Title<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="title" id="title"
                                                         type="text" placeholder="Enter title name" required="">
                                                     <div class="invalid-feedback">
                                                         Please enter a title name.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-12">
                                                     <label class="form-label">Description<span
                                                             class="txt-danger">*</span></label>
                                                     <textarea id="editor1" class="form-control" name="descripton"
                                                         cols="30" rows="5"></textarea>
                                                 </div>
                                                 <div class="col-md-12">
                                                     <label class="form-label">Keyword<span
                                                             class="txt-danger">*</span></label>
                                                     <textarea id="editor1" class="form-control" name="keyword"
                                                         cols="30" rows="5"></textarea>
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
                                                 action="<?php echo base_url()?>seo_meta_keyword/udateSeoMetakeword" method="post"
                                                 enctype="multipart/form-data">
                                                 <div class="col-md-6">
                                                 <input type="hidden" name="meta_id" id="meta_id">
                                                     <label class="form-label" for="e_slug">Slug<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="e_slug" id="e_slug"
                                                         type="text" placeholder="Enter slug name" required="">
                                                     <div class="invalid-feedback">
                                                         Please enter a slug name.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label" for="e_title">Title<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="e_title" id="e_title"
                                                         type="text" placeholder="Enter title name" required="">
                                                     <div class="invalid-feedback">
                                                         Please enter a title name.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-12">
                                                     <label class="form-label">Description<span
                                                             class="txt-danger">*</span></label>
                                                     <textarea id="editor1" class="form-control" name="e_descripton"
                                                         cols="30" rows="5"></textarea>
                                                 </div>
                                                 <div class="col-md-12">
                                                     <label class="form-label">Keyword<span
                                                             class="txt-danger">*</span></label>
                                                     <textarea id="editor2" class="form-control" name="e_keyword"
                                                         cols="30" rows="5"></textarea>
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

             function edit_seo(id) {
                         $('input[name=meta_id]').val(id);
                         $.ajax({
                             url: '<?php echo base_url() . 'seo_meta_keyword/seo_meta_edit'; ?>',
                             method: 'post',
                             dataType: 'json',
                             data: {
                                 'id': id
                             },
                             success: function(data) {
                                 $('input[name=e_slug]').val(data.metadetails['slug']);
                                 $('input[name=e_title]').val(data.metadetails['title']);
                                 $('textarea#editor1').val(data.metadetails['descriptions']);
                                 $('textarea#editor2').val(data.metadetails['keywords']);
                             }
                         });
                     }
             </script>