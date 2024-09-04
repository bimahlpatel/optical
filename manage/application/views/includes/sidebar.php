<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
          <div>
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="<?php echo base_url()?>assets/images/logo/infoloop.png" alt=""><img class="img-fluid for-dark" src="<?php echo base_url()?>assets/images/logo/infoloop.png" alt=""></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="<?php echo base_url()?>assets/images/logo/infoloop.png" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-1">General</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                   <a class="sidebar-link sidebar-title" href="<?php echo base_url('dashboard')?>">
                      <svg class="stroke-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-home"></use>
                      </svg>
                      <span class="lan-3">Dashboard</span></a>
                  </li>
                 
                 
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-8">Applications</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#fill-ecommerce"></use>
                      </svg><span>Ecommerce</span></a>
                      <ul class="sidebar-submenu">
                        <li><a href="<?php echo base_url()?>Category_Master">Category</a></li>
                        <li><a href="<?php echo base_url()?>category">SubCategory</a></li>
                        <li><a href="<?php echo base_url()?>product">Product</a></li>
                        <li><a href="<?php echo base_url()?>product/addproduct">Add Products</a></li>                
                      </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#fill-ecommerce"></use>
                      </svg><span>Contact Lenses</span></a>
                      <ul class="sidebar-submenu">
                        <li><a href="<?php echo base_url()?>contact_lenses/lenses_category">Lenses Category</a></li>
                        <li><a href="<?php echo base_url()?>contact_lenses/lenses_subcategory">Lenses SubCategory</a></li>
                        <li><a href="<?php echo base_url()?>contact_lenses/lenses_product">Lenses Product</a></li>
                        <li><a href="<?php echo base_url()?>contact_lenses/add_lenses_product">Add Contact Leses</a></li>
                      </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                      <a class="sidebar-link sidebar-title link-nav" href="<?php echo base_url()?>brand">
                      <svg class="stroke-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-faq"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#fill-faq"></use>
                      </svg><span>Brand</span></a>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                      <a class="sidebar-link sidebar-title link-nav" href="<?php echo base_url()?>site/banner">
                      <svg class="stroke-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-faq"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#fill-faq"></use>
                      </svg><span>Home Banner</span></a>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-user"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#fill-user"></use>
                      </svg><span>Users</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="user-profile.html">Users Profile</a></li>
                      <li><a href="edit-profile.html">Users Edit</a></li>
                      <li><a href="user-cards.html">Users Cards</a></li>
                    </ul>
                  </li>
                  

                      <li class="sidebar-main-title">
                    <div>
                      <h6>Page Setting</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                      <a class="sidebar-link sidebar-title link-nav" href="<?php echo base_url()?>site">
                      <svg class="stroke-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-faq"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#fill-faq"></use>
                      </svg><span>Site Setting</span></a></li>
                    
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                      <a class="sidebar-link sidebar-title link-nav" href="<?php echo base_url()?>site/store_locator">
                      <svg class="stroke-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-faq"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#fill-faq"></use>
                      </svg><span>Store Locator</span></a></li>
                  
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                      <a class="sidebar-link sidebar-title link-nav" href="<?php echo site_url('site/editPage/terms-conditions'); ?>">
                      <svg class="stroke-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-faq"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#fill-faq"></use>
                      </svg><span>Terms and Condition</span></a></li>

                      <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                      <a class="sidebar-link sidebar-title link-nav" href="<?php echo site_url('site/editPage/privacy-policy'); ?>">
                      <svg class="stroke-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-faq"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#fill-faq"></use>
                      </svg><span>Privacy Policy</span></a></li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="faq.html">
                      <svg class="stroke-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-faq"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#fill-faq"></use>
                      </svg><span>FAQ</span></a></li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="<?php echo base_url();?>seo_meta_keyword">
                      <svg class="stroke-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-faq"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#fill-faq"></use>
                      </svg><span>Seo MetaKeyward</span></a>
                    </li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>