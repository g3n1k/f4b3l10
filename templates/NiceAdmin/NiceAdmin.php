<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?php echo base_url();?>favicon.png">

  <title>Blank | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo template_dir(); ?>css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo template_dir(); ?>css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo template_dir(); ?>css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo template_dir(); ?>css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo template_dir(); ?>css/style.css" rel="stylesheet">
  <link href="<?php echo template_dir(); ?>css/style-responsive.css" rel="stylesheet" />
  <script> function base_url() { return "<?php echo base_url();?>" }; </script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->

    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="<?php echo base_url();?>" class="logo">Nice <span class="lite">Admin</span></a>
      <!--logo end-->
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          
          <li>
            <a class="" href="<?php echo base_url().'fabs/page_1';?>">
                <i class="icon_document_alt"></i>
                <span>Input</span>
            </a>
          </li>
          <li>
            <a class="" href="<?php echo base_url().'fabs/page_2';?>">
                <i class="icon_genius"></i>
                <span>List</span>
            </a>
          </li>
          <li>
            <a class="" href="<?php echo base_url().'fabs/page_3';?>">
                <i class="icon_piechart"></i>
                <span>Price</span>
            </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i> <?php echo @if_empty($title, 'Please Input fabelio url product');?></h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url().'fabs/page_1';?>">Input</a></li>
              <li><i class="fa fa-bars"></i><a href="<?php echo base_url().'fabs/page_2';?>">List</a></li>
              <li><i class="fa fa-square-o"></i><a href="<?php echo base_url().'fabs/page_3';?>">Price</a></li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <mp:Contentmain />      
         <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="<?php echo template_dir(); ?>js/jquery.js"></script>
  <script src="<?php echo template_dir(); ?>js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="<?php echo template_dir(); ?>js/jquery.scrollTo.min.js"></script>
  <script src="<?php echo template_dir(); ?>js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="<?php echo template_dir(); ?>js/scripts.js"></script>
  <?php echo @if_empty($include_script,'<meta name="noscript">'); ?>


</body>

</html>
