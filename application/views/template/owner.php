<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Restaurant | Owner</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
   <link href="<?php echo base_url(); ?>assets/admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/admin/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN THEME STYLES --> 
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/plugins/select2/select2.css"/>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/plugins/select2/select2-metronic.css"/>
   <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/assets/plugins/data-tables/DT_bootstrap.css"/>
   <link href="<?php echo base_url(); ?>assets/admin/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/admin/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/admin/css/themes/default.css" rel="stylesheet" type="text/css">
   <link href="<?php echo base_url(); ?>assets/admin/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="index.html">
			<img src="<?php echo base_url();?>assets/admin/img/logo.png" alt="logo" class="img-responsive"/>
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="<?php echo base_url();?>assets/admin/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="<?php echo base_url();?>assets/admin/img/avatar1_small.jpg"/>
					<span class="username">
						 Anonymous
					</span>
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="<?php echo site_url();?>/login/logout">
							<i class="fa fa-key"></i> Log Out
						</a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="#" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove">
								</a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active ">
					<a href="<?php echo site_url();?>/Dashboard">
						<i class="fa fa-home"></i>
						<span class="title">
							Dashboard
						</span>
						<span class="selected">
						</span>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url();?>/Menu">
						<i class="fa fa-cutlery"></i>
						<span class="title">
							Manage Menu
						</span>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url();?>/Pegawai">
						<i class="fa fa-group"></i>
						<span class="title">
							Manage Pegawai
						</span>
					</a>
				</li>
				<li class="last ">
					<a href="<?php echo site_url();?>/Laporan">
						<i class="fa fa-bar-chart-o"></i>
						<span class="title">
							Laporan
						</span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<?php $this->load->view($main_content); ?>  
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 2014 &copy; Metronic by keenthemes.
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->

   <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/plugins/jquery-1.10.2.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
   <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
   <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>      
   <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url(); ?>assets/admin/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/plugins/jquery-validation/dist/additional-methods.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/plugins/select2/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/plugins/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/plugins/data-tables/DT_bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/plugins/select2/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/plugins/fuelux/js/spinner.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/admin/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/admin/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/admin/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/admin/plugins/typeahead/handlebars.min.js" type="text/javascript"></script>	
	<script src="<?php echo base_url();?>assets/admin/plugins/typeahead/typeahead.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url(); ?>assets/admin/scripts/core/app.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/scripts/custom/table-editable.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/scripts/custom/table-advanced.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/scripts/custom/table-managed.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/scripts/core/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/scripts/custom/form-wizard.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/scripts/custom/components-form-tools.js"></script>
<!-- END CORE PLUGINS -->
<script>
      jQuery(document).ready(function() {    
         App.init();
		 TableManaged.init();
		 ComponentsFormTools.init();
      });
   </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>