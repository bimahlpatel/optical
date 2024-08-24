 <!-- Page Header Start-->
 <?php
            include_once(APPPATH.'views/includes/header.php');
        ?>
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
                             Display Banner</h4>
                     </div>
                     <div class="col-6">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.html">
                                     <svg class="stroke-icon">
                                         <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-home"></use>
                                     </svg></a></li>
                             <li class="breadcrumb-item active">Banner</li>
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
                                                 class="icon-close filter-close hide"></i></a></div><a class="btn btn-primary f-w-500" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#dashboard8"><i class="fa fa-plus pe-2"></i>Add Banner</a>
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
                                             <th> <span class="f-light f-w-600">Banner Title</span></th>
                                             <th> <span class="f-light f-w-600">Banner Subtitle</span></th>
                                             <th> <span class="f-light f-w-600">Banner Image</span></th>
                                             <th> <span class="f-light f-w-600">Banner Status</span></th>
                                             <th> <span class="f-light f-w-600">Action</span></th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                        <?php if(count($bannerdetails) > 0){
                                            foreach($bannerdetails as $row){?>

                                            <tr class="product-removes">
                                             <td>
                                                 <div class="form-check">
                                                     <input class="form-check-input checkbox-primary" type="checkbox">
                                                 </div>
                                             </td>
                                             <td>
                                                 <div class="product-names">
                                                     <p><?php echo $row->title;?></p>
                                                 </div>
                                             </td>
                                             <td>
                                                 <div class="product-names">
                                                     <p><?php echo $row->sub_title;?></p>
                                                 </div>
                                             </td>
                                             <td> <span class="badge badge-light-primary"><img src="<?php echo COMPANY_SITE.'assets/uploads/banner/'.$row->image;?>" width="50" height="50"></span></td>
                                             <td>
                                                 <div class="product-names">
                                                     <p><?php if($row->is_active == 0) { echo 'Active'; } else { echo 'Inactive';}?></p>
                                                 </div>
                                             </td>
                                             <td>
                                             <ul class="action"> 
                                                    <li class="edit"> <a href="<?php echo base_url()?>site/editbanner/<?php echo $row->id;?>"><i class="icon-pencil-alt"></i></a></li>
                                                    <li class="delete"><a href="<?php echo base_url()?>site/deletebanner/<?php echo $row->is_active;?>/<?php echo $row->id;?>"><i class="icon-trash"></i></a></li>
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
                                     <h5 class="modal-title" id="modaldashboard">Add Categories</h5>
                                     <button class="btn-close" type="button" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body p-0 custom-input">
                                     <div class="text-start">
                                         <div class="p-20">
                                             <form class="row g-3 needs-validation" novalidate="" action="<?php echo base_url()?>site/add_banner" method="post" enctype="multipart/form-data">
                                                 <div class="col-md-6">
                                                     <label class="form-label" for="bannerName">Banner
                                                         Name<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="bannername" id="bannerName" type="text"
                                                         placeholder="Enter your banner name" required="">
                                                     <div class="invalid-feedback">
                                                         Please enter a banner name.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>

                                                 <div class="col-md-6">
                                                     <label class="form-label" for="bannersubtitle">Banner
                                                         Subtitle<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="bannersubtitle" id="bannersubtitle" type="text"
                                                         placeholder="Enter your banner subtitle" required="">
                                                     <div class="invalid-feedback">
                                                         Please enter a banner subtitle.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 
                                                 <div class="col-md-6"> 
                                                    <label class="form-label" for="bannerimg">Product Image</label>
                                                    <input class="form-control" id="bannerimg" type="file" aria-label="file example" name="banner_image" required="">
                                                    <div class="invalid-feedback">Invalid form file selected</div>
                                                </div>

                                                 <div class="col-md-6">
                                                     <label class="form-label">Banner Status<span
                                                             class="txt-danger">*</span></label>
                                                     <select class="form-select" name="bannerstatus" aria-label="Select banner status" required="">
                                                         <option selected="">Active</option>
                                                         <option value="1">Inactive</option>
                                                     </select>
                                                     <div class="invalid-feedback">
                                                         Please choose a banner status.</div>
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
        <script src="<?php echo base_url('assets/js/editors/quill.js')?>"></script>
        
    <script>
         var editor10 = new Quill("#editor10", {
      modules: { toolbar: "#toolbar10" },
      theme: "snow",
      placeholder: "Enter your messages...",
    });
    </script>