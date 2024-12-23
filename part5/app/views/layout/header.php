<!doctype html>
<html>
    <head>
        <title><?php echo APPNAME; ?></title>
        <!-- fav icon -->
        <link
            rel="icon"
            href="<?php echo ROOTURL; ?>/public/assets/img/fav/favicon.png"
            type="image/png"
            sizes="16x16"
        />
        <!-- bootstrap css1 js1 -->
        <link
            rel="stylesheet"
            href="<?php echo ROOTURL; ?>/public/assets/libs/bootstrap-5.3.2-dist/css/bootstrap.min.css"
            type="text/css"
        />
        <!-- fontawesome css1 -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"/>
        <!-- jquery ui css1 js1 -->
        <link
            rel="stylesheet"
            href="<?php echo ROOTURL; ?>/public/assets/libs/jquery-ui-1.13.2/jquery-ui.min.css"
            type="text/css"/>
        <!-- lingtbox2 css1 js1 -->
        <link
            rel="stylesheet"
            href="<?php echo ROOTURL; ?>/public/assets/libs/lightbox2-2.11.4/dist/css/lightbox.min.css"
            type="text/css"/>
        <!-- custom css -->
        <link rel="stylesheet" href="<?php echo ROOTURL; ?>/public/css/style.css" type="text/css" />
    </head>
    <body>
        
    <!-- Start Back To Top  -->
    <div class="fixed-bottom">

<a href="<?php echo ROOTURL; ?>/welcomes" class="btn-backtotops"><i class="fas fa-arrow-up"></i></a>
</div>
<!-- End Back To Top  -->


<!-- Start Stick Note  -->
<div class="sticknotes">
<a href="javascript:void(0);" class="about">About</a>
<a href="javascript:void(0);" class="blog">Blog</a>
<a href="javascript:void(0);" class="news">News</a>
<a href="javascript:void(0);" class="contact">Contact</a>
</div>
<!-- End Stick Note  -->


<?php
    require APPURL.'/views/layout/navbar.php';
?>