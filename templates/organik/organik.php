<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.7
*
-->
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Inconis <?php echo @if_empty($title,'Hello'); ?></title>
    <!-- <link rel="icon" type="image/x-icon" class="js-site-favicon" href="inconis.png"> -->
	<link rel="icon" type="image/x-icon" class="js-site-favicon" href="<?php echo base_url().'templates/'.$this->config->item('template').'/img/';?>logo.png">

    <link href="<?php echo template_dir(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo template_dir(); ?>css/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo template_dir(); ?>css/ichek/custom.css" rel="stylesheet">
    <link href="<?php echo template_dir(); ?>css/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="<?php echo template_dir(); ?>css/fullcalendar/fullcalendar.print.css" rel='stylesheet' media='print'>
	

    
    <link href="<?php echo template_dir(); ?>css/chosen/bootstrap-chosen.css" rel="stylesheet">
    <link href="<?php echo template_dir(); ?>css/animate.css" rel="stylesheet">
    <link href="<?php echo template_dir(); ?>css/style.css" rel="stylesheet">

     <!-- Toastr style -->
	<link href="<?php echo template_dir(); ?>css/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
	<link href="<?php echo template_dir(); ?>js/assets/gritter/jquery.gritter.css" rel="stylesheet">
    <script> function base_url() { return "<?php echo base_url();?>" }; </script>

</head>

<body class="darkmode"> 
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <?php echo Modules::run('bluehrd_api/user/bluehrd_user_data'); ?>
                        <div class="logo-element">
                            INJ
                        </div>
                    </li>
                    
                    <?php //echo $name;?>
                    <?php //if (@if_empty($title, '')=="Dashboard HRIS INCONIS") 
						
						if( is_login('group_name') == 'gmho') echo Modules::run('navigation/generate_menu_array2', "gmho-side-menu", 'sidebar'); 
						
                        elseif(is_login('group_name') == 'user') echo Modules::run('navigation/generate_menu_array2', "new-side-menu", 'sidebar'); 
                        
                        else echo Modules::run('navigation/generate_menu_array2', "regional-side-menu", 'sidebar'); 
                     ?>
                    
                </ul>
            </div>
        </nav>
		
        <!-- Navigation -->
        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-white welcome-message">Sistem Informasi Kehadiran.</span>
                </li>

                <li class="dropdown">
                    <a class="count-info" data-toggle="dropdown" href="<?php echo base_url();?>notification">
                        <i class="fa fa-bell"></i>  <span class="label label-primary"><span id="num-notif"></span> </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url()."logout"?>">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>                
            </ul>
        </nav>
        </div>
		<div class="wrapper wrapper-content">
		<?php if(@if_empty($title)) { ?>
		
		<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        
        <ol class="breadcrumb">
		<mp:Breadcrumb />
        </ol>
    </div>
</div>
<?php } ?>
		<mp:Contentmain />
    </div>           
    <div class="footer">
        <div class="pull-right">
              &copy; 2019 <strong>PT. Inconis Nusa Jaya</strong>
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="<?php echo template_js(); ?>/plugins/fullcalendar/moment.min.js"></script>
    <script src="<?php echo template_js(); ?>/jquery-3.1.1.min.js"></script>
    <script src="<?php echo template_js(); ?>/bootstrap.min.js"></script>
    <script src="<?php echo template_js(); ?>/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo template_js(); ?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>
     <!-- Full Calendar -->
    <script src="<?php echo template_js(); ?>/plugins/fullcalendar/fullcalendar.min.js"></script>

    <!-- Peity -->
    <script src="<?php echo template_js(); ?>/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo template_js(); ?>/demo/peity-demo.js"></script>
<!-- Custom and plugin javascript -->
    <script src="<?php echo template_js(); ?>/inspinia.js"></script>
    <script src="<?php echo template_js(); ?>/plugins/pace/pace.min.js"></script>
    <!-- jQuery UI -->
    <script src="<?php echo template_js(); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Chosen -->
        <script src="<?php echo template_js(); ?>/plugins/chosen/chosen.jquery.js"></script>

    <!-- Toastr -->
    <script src="<?php echo template_js(); ?>/plugins/toastr/toastr.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo template_js(); ?>/plugins/iCheck/icheck.min.js"></script>
	<!-- the cms -->
    <?php echo @if_empty($include_script,''); ?>
    <script src="<?php echo base_url()."cms/plugin/notification/js/num.js"; ?>"></script>
    <!-- <script src="<?php echo base_url()."cms/plugin/attendance/js/kalender.js"; ?>"></script> -->
    

</body>
</html>
