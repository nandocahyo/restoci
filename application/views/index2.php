<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Veggi One Page Restorent Template</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome/css/font-awesome.min.css" />
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700,300italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/animat/animate.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/nivo-lightbox/nivo-lightbox.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/themes/default/default.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl-carousel/owl.theme.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl-carousel/owl.transitions.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css" />
	<link rel="stylesheet" href="<?php echo base_url().'/assets/admin2/dropdown/jquery-ui.css';?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url().'/assets/admin2/dropdown/ui.theme.css';?>" type="text/css" media="all" />
	<script src="<?php echo base_url().'/assets/admin2/dropdown/jquery_203_min.js';?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'/assets/admin2/dropdown/jquery-ui-1.10.3.custom.min.js';?>" type="text/javascript"></script>
</head>
<body>


	<div class='preloader'><div class='loaded'>&nbsp;</div></div>
	<header id="home" class="header">
		<div class="main_menu_bg navbar-fixed-top wow slideInDown" data-wow-duration="1s">
			<div class="container">
				<div class="row">
					<div class="nave_menu">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  
						  <ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="<?php echo site_url();?>">HOME</a></li>
							<li><a href="#features">FEATURES</a></li>
							<li><a href="#special">MENU</a></li>
							<li><a href="#footer">RESERVATION</a></li>
							<li><a href="<?php echo site_url();?>/Login">LOGIN</a></li>
						  </ul>
						</div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
					</div>	
				</div><!--End of row -->
				
			</div><!--End of container -->
			
		</div>
	</header> <!--End of header -->
	
	
	
	<section id="banner" class="banner">
		<div class="container">
			<div class="row">
				<div class="main_banner_area text-center">
					<div class="col-md-5 col-sm-5 col-md-offset-7 col-sm-offset-7">
						<div class="single_banner_text wow zoomIn" data-wow-duration="1s">
							
							
							<div class="separetor"></div>
						</div>
					</div>
					
					
					<div class="scrolldown">
						<a href="#special" class="scroll_btn"></a>
					</div>
				</div>
				
				
			</div>
		</div>
	</section><!-- End of Banner Section -->
	
	

	
	<section id="features" class="features sections">
		<div class="container">
			<div class="row">
				<div class="features_content text-center">
					<div class="col-md-4">
						<div class="sinle_features wow slideInUp" data-wow-duration="1s">
							<img src="<?php echo base_url();?>assets/images/icon1.png" alt="" />
							<h5>Turnip greens</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc Pellentesque vel enim a elit viverra elementuma. Aliquam erat volutpat. </p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="sinle_features wow slideInUp" data-wow-duration="1.5s">
							<img src="<?php echo base_url();?>assets/images/icon1.png" alt="" />
							<h5>Turnip greens</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc Pellentesque vel enim a elit viverra elementuma. Aliquam erat volutpat. </p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="sinle_features wow slideInUp" data-wow-duration="2s">
							<img src="<?php echo base_url();?>assets/images/icon1.png" alt="" />
							<h5>Turnip greens</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc Pellentesque vel enim a elit viverra elementuma. Aliquam erat volutpat. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End of Abouts Section -->	
	
	<section id="special" class="special sections">
		<div class="container">
			<div class="row">
				<div class="head_title text-center wow slideInLeft" data-wow-duration="1.5s">
					<h2>Menu Makanan</h2>
					<div class="separetor"></div>
				</div>
				<div class="main_special text-center wow slideInUp" data-wow-duration="3s">
					<?php foreach($list1 as $row) { ?>
					<div class="col-md-3 col-sm-1 col-xs-6 single_special">
						<div class="single_special_img">
							<img src="<?php echo base_url('assets/img/menu/'.$row->gambar);?>" alt="" style="height:200px;"/>
							<div class="single_special_overlay text-center">
								<h3><?php echo $row->nama_menu;?></h3>
								<div class="overlay_separetor"></div>
								<p>Special</p>
								<p>Rp. 	<?php echo $row->harga;?>,-</p>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="head_title text-center wow slideInLeft" data-wow-duration="1.5s">
					<h2>Menu Minuman</h2>
					<div class="separetor"></div>
				</div>
				<div class="main_special text-center wow slideInUp" data-wow-duration="3s">
					<?php foreach($list2 as $row) { ?>
					<div class="col-md-3 col-sm-1 col-xs-6 single_special">
						<div class="single_special_img">
							<img src="<?php echo base_url('assets/img/menu/'.$row->gambar);?>" alt="" style="height:200px;"/>
							<div class="single_special_overlay text-center">
								<h3><?php echo $row->nama_menu;?></h3>
								<div class="overlay_separetor"></div>
								<p>Special</p>
								<p>Rp. 	<?php echo $row->harga;?>,-</p>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>

	<!-- footer Section -->
	
	<footer id="footer" class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-7 col-xs-10 col-xs-offset-2">
					<div class="contact_area wow slideInLeft" data-wow-duration="2s">
						<div class="head_title text-center">
							<h2>Reservation</h2>
							<div class="separetor"></div>
						</div>
						
						<div class="main_contact_content">							
							<div class="contact_form_area">
								<form action="<?php echo site_url();?>/Main/tambah_transaksi" class="form-horizontal validate-form" enctype="multipart/form-data" method="post">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
											<label for="activities">ID Transaksi :</label>
												<input type="text" class="form-control" name="id_transaksi" value="<?php echo $id_transaksi;?>" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label for="activities">Date :</label>
												<input type="text" name="tgl_order" class="form-control" value="<?php echo $tgl_sekarang;?>" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<input type="text" class="form-control" name="nama" placeholder="Nama">
											</div>
										</div>
									</div>
									
									
									<div class="row">
										<div class="col-sm-12">
										
											<div class="form-group">
												<label for="activities">Menu Makanan :</label>
														<select name="mkn" id="mkn" class="form-control">
															<option value="">-Select Menu</option>
															<?php foreach($list1 as $row) { ?>
															<option value='<?php echo $row->id_menu;?>' /><?php echo $row->nama_menu;?></option>
															<?php } ?>	
														</select>
											</div>
												<div id="h_makanan">
													<input type="hidden" class="form-control">
												</div>
											<div class="form-group">
												<label for="activities">Menu Minuman :</label>
														<select name="mnm" id="mnm" class="form-control">
															<option value="">-Select Menu</option>
															<?php foreach($list2 as $row) { ?>
															<option value='<?php echo $row->id_menu;?>' /><?php echo $row->nama_menu;?></option>
															<?php } ?>	
														</select>
											</div>
											
												<div id="h_minuman">
													<input type="hidden" class="form-control">
												</div>
											
											
										</div>

										<div class="form_btn_area text-center">
											<button class="btn">Order</button>
										</div>
									</div>
								</form>	
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="copyright_text_area">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_footer text-right wow zoomIn" data-wow-duration="2s">
							<p>Made with <i class="fa fa-heart"></i> by Team 2018. All Rights Reserved</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_footer text-right">
							
							<div class="footer_socail wow zoomIn" data-wow-duration="1.5s">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	


	<!-- STRAT SCROLL TO TOP -->
	
	<div class="scrollup">
		<a href="<?php echo base_url();?>assets/#"><i class="fa fa-chevron-up"></i></a>
	</div>
	
	
	
	
	

	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery/jquery.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/fancybox/jquery.fancybox.pack.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/nivo-lightbox/nivo-lightbox.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/owl-carousel/owl.carousel.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-easing/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/wow/wow.min.js"></script>
	
	
	<script src="<?php echo base_url().'assets/admin2/scripts/app.js'; ?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/admin2/scripts/index.js'; ?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/admin2/scripts/tasks.js'; ?>" type="text/javascript"></script>      
	<script src="<?php echo base_url().'/assets/admin2/dropdown/jquery_203_min.js';?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'/assets/admin2/dropdown/jquery-ui-1.10.3.custom.min.js';?>" type="text/javascript"></script>
	
	<script type="text/javascript">
        $("#mkn").change(function(){
                var mkn = {mkn:$("#mkn").val()};
                $.ajax({
                        type: "POST",
                        url : "<?php echo site_url('Main/show_pesan_mkn')?>",
                        data: mkn,
                        success: function(msg){
                            $('#h_makanan').html(msg);
                        }
                    });
        });
		</script>

	<script type="text/javascript">
        $("#mnm").change(function(){
                var mnm = {mnm:$("#mnm").val()};
                $.ajax({
                        type: "POST",
                        url : "<?php echo site_url('Main/show_pesan_mnm')?>",
                        data: mnm,
                        success: function(msg){
                            $('#h_minuman').html(msg);
                        }
                    });
        });
		</script> 		
</body>
</html>