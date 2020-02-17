<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maundy | Comming Soon Page</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,400italic,300italic,300|Raleway:300,400,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo template_dir(); ?>css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo template_dir(); ?>css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo template_dir(); ?>css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo template_dir(); ?>css/style.css">
  <!-- =======================================================
    Theme Name: Maundy
    Theme URL: https://bootstrapmade.com/maundy-free-coming-soon-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <script> function base_url() { return "<?php echo base_url();?>" }; </script>
</head>

<body>
  <div class="content">
    <div class="container wow fadeInUp delay-03s">
      <div class="row">
        <div class="logo text-center">
          <img src="<?php echo template_dir(); ?>img/logo.png" alt="logo" width="150">
          <h2><?php echo @if_empty($title, 'Please Input fabelio url product');?></h2>
        </div>
        <mp:Contentmain />        
        
        
      </div>
    </div>
    <section>
      <div class="container">
        <div class="row bort text-center">
          <div class="social">
            <ul>
              <li>
                <a href="<?php echo base_url().'fabs/_1';?>"><i class="fa fa-share-alt"></i></a>
              </li>
              <li>
                <a href="<?php echo base_url().'fabs/_2';?>"><i class="fa fa-server"></i></a>
              </li>
              <li>
                <a href="<?php echo base_url().'fabs/_3';?>"><i class="fa fa-sellsy"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

  </div>

  <script src="<?php echo template_dir(); ?>js/jquery.min.js"></script>
  <script src="<?php echo template_dir(); ?>js/bootstrap.min.js"></script>
  <script src="<?php echo template_dir(); ?>js/jquery.countdown.min.js"></script>
  <script src="<?php echo template_dir(); ?>js/wow.js"></script>
  <script src="<?php echo template_dir(); ?>js/custom.js"></script>
  <?php echo @if_empty($include_script,'<meta name="noscript">'); ?>

</body>

</html>
