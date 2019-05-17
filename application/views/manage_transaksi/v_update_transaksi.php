<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Halaman Petugas | <small> ( Aplikasi Restaurant )</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo site_url();?>/Dashboard">
								Home
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<?php echo form_open('Transaksi/bayar/'.$hasil->id_transaksi,array('class'=>'form-horizontal','enctype'=>"multipart/form-data")); ?>		
						<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">ID transaksi	:</label>
								<div class="col-md-7">
							<input type="text" class="form-control" name="id_transaksi" value="<?php echo $hasil->id_transaksi; ?>" readonly>
								</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Status	:</label>
								<div class="col-md-7">
									<select name="status" class="select2 form-control">
										<option value="belum dibayar">belum dibayar</option>
										<option value="sudah dibayar">sudah dibayar</option>
									</select>
								</div>
						</div>
						
					<!-- END FORM-->
						</div>
						<div class="form-group well">
							<?php echo form_submit('submit', 'Update','class="btn btn-primary"'); ?>	
							<button type="reset" value="reset" class="btn"><i class="icon icon-refresh"></i> Reset</button>
 						</div>
					<?php echo form_close(); ?>
					
				</div>
			</div>
			<!-- END PAGE CONTENT-->