<!DOCTYPE html>
<html lang="zxx">

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <script>
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <?php echo link_tag('assets/css/bootstrap.css'); ?>
    <?php echo link_tag('assets/css/login_overlay.css'); ?>
    <?php echo link_tag('assets/css/style6.css'); ?>
    <?php echo link_tag('assets/css/shop.css'); ?>
    <?php echo link_tag('assets/css/contact.css'); ?>
    <?php echo link_tag('assets/css/checkout.css'); ?>
    <?php echo link_tag('assets/css/owl.carousel.css'); ?>
    <?php echo link_tag('assets/css/owl.theme.css'); ?>
    <?php echo link_tag('assets/css/jquery-ui1.css'); ?>
    <?php echo link_tag('assets/css/easy-responsive-tabs.css'); ?>
    <?php echo link_tag('assets/css/flexslider.css'); ?>
    <?php echo link_tag('assets/css/style.css'); ?>
    <?php echo link_tag('assets/css/fontawesome-all.css'); ?>
    <?php echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css');?>
    <?php echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css');?>
    <link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
        rel="stylesheet">
</head>

<body>
    <div class="banner-top container-fluid" id="home">
        <!-- header -->
        <header>
            <div class="row">
                <div class="col-md-2 logo text-center">
                    <h1 class="logo">
                        <a class="navbar-brand" href="<?php echo base_url()?>">
                            <img src="<?php echo base_url('assets/images/vision_hub.png') ?>"> </a>
                    </h1>
                </div>
                <div class="col-md-10">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

                        <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">

                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav nav-mega mx-auto">
                                <li class="nav-item active">
                                    <a class="nav-link ml-lg-0" href="<?php echo base_url();?>">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('aboutus')?>">About</a>
                                </li>
                                <li class="nav-item dropdown">
                                   
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Glasses
                                        </a>
                                        
                                    </a>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                            <?php foreach($categorylist as $row){?>
                                                <li>
                                                    <a href="<?php echo base_url()?>category/<?php echo $row->category_slug ?>" class="dropdown-item"><?php echo $row->name;?></a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                        </li>
                                    </ul>
                                    <!--<ul class="dropdown-menu mega-menu ">
                                        <li>
                                            <div class="row">
                                                <div class="col-md-4 media-list span4 text-left">
                                                    <h5 class="tittle-sub">Glasses</h5>
                                                    <?php foreach($categorylist as $row){?>
                                                    <ul>
                                                        <li class="media-mini mt-3">
                                                            <a href="<?php echo base_url()?>category/<?php echo $row->category_slug ?>"><?php echo $row->name;?></a>
                                                        </li>
                                                    </ul>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-md-4 media-list span4 text-left">
                                                    <h5 class="tittle-sub"> Tittle here</h5>
                                                    <div class="media-mini mt-3">
                                                        <a href="shop.html">
                                                            <img src="<?php echo base_url()?>assets/images/g2.jpg"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 media-list span4 text-left">
                                                    <h5 class="tittle-sub">Tittle here</h5>
                                                    <div class="media-mini mt-3">
                                                        <a href="shop.html">
                                                            <img src="<?php echo base_url()?>assets/images/g3.jpg"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                            <hr>
                                        </li>
                                    </ul>-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url();?>Contact_Lenses">Contact Lenses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url();?>store_locator">Store Locator</a>
                                </li>
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Service
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark p-2" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#editdashboard8">Free Eye Chekup</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#editdashboard9">Vision Thrapist</a></li>
                                    </ul>
                                    </li>
                                </ul>
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                                        Others
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Blog</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url();?>faqs">Faqs</a></li>
                                    </ul>
                                    </li>
                                </ul>
                               
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </header>
