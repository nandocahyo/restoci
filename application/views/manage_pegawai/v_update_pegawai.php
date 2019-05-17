<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Halaman Administrator | <small> ( Aplikasi Restaurant )</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo site_url();?>/Dashboard">
								Home
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo site_url();?>/Pegawai">
								Manage Pegawai
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo site_url();?>/Pegawai">
								Daftar Pegawai
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								Edit Pegawai
							</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<?php echo form_open('Pegawai/ubah_data_pegawai/'.$hasil->id,array('class'=>'form-horizontal','enctype'=>"multipart/form-data")); ?>		
						<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">NIP </label>
							<div class="col-md-7">
								<input class="form-control" id="mask_number" type="text" name="nip" value="<?php echo $hasil->nip; ?>"/>
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Username </label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="username" value="<?php echo $hasil->username; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Password </label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="password" value="<?php echo $hasil->password; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Nama </label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="nama" value="<?php echo $hasil->nama; ?>">
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