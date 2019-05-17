<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?= base_url()?>assets/print/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="<?= base_url()?>assets/print/css/kartu.css" rel='stylesheet' type='text/css' />
    <script src="<?= base_url()?>assets/print/js/bootstrap.min.js"></script>
	<link href="<?php echo base_url(); ?>assets/admin/css/print.css" rel="stylesheet" type="text/css" media="print"/>
	<link href="<?php echo base_url(); ?>assets/admin/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	 <link rel="icon" href="<?php echo base_url();?>assets/img/ico.png">
</head>
<body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="content">		
		<?php foreach($nota as $row) { ?>
	    <div class="card">
			<div class="col-md-9"></div><a class="btn btn-danger" href="<?php echo site_url();?>"> Home <i class="fa fa-home"></i> </a>	<a class="btn btn-primary hidden-print" onclick="javascript:window.print();">
				Print <i class="fa fa-print"></i></a>	
			
			<h1 style="padding-left:130px">Restaurant Card</h1>
	        <div class="firstinfo"><img style="width: 150px;height: 160px" src="<?php echo base_url('assets/img/QRcode/'.$row->qrcode);?>">
	            <div class="profileinfo">
	                <hr><div class="col-md-12">
					<div class="col-md-12">
					<p><?php echo $row->id_transaksi;?> <br> <?php echo $row->tgl_order;?></p><hr>
					</div>
					<div class="col-md-12">
					<div class="col-md-2">
						Nama 		<br>
						Pesanan  	<br>
									<br>
									<br>
						
					</div>	
					<div class="col-md-5">
						<?php echo $row->nama;?> <br>
						<?php echo $row->makanan;?> <br>
						<?php echo $row->nama_menu;?> <br>
					</div>
					<div class="col-md-1">
						Qty:<br>
						<?php echo $row->qty_mkn;?> <br>
						<?php echo $row->qty_mnm;?> <br><br>
						Total Bayar 
					</div>
					<div class="col-md-4">
						<br>
						Rp.<?php echo $row->h_makanan;?> /porsi<br>
						Rp.<?php echo $row->harga;?> /porsi<br><br><br>
						Rp.<?php echo $row->total_bayar;?>,- <br>
					</div>	
					</div>
					</div>
	            </div>
	        </div><br><br><br>
			<p style="padding-left:300px"><i class="fa fa-cutlery"></i> Restaurant.inc &copy2018 </p>
	    </div>
		<?php } ?>
	</div>
    <br>
</div>
</body>
  
    <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
</html>