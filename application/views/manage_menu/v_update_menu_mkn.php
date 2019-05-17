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
							<a href="<?php echo site_url();?>/Menu">
								Manage Menu
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo site_url();?>/Menu">
								Daftar Menu
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								Edit Menu
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
					<?php echo form_open('Menu/ubah_data_menu_mkn/'.$hasil->id_menu,array('class'=>'form-horizontal','enctype'=>"multipart/form-data")); ?>		
						<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">Type	:</label>
								<div class="col-md-7">
							<input type="text" class="form-control" placeholder="Nama Menu" name="type" value="<?php echo $hasil->type; ?>" readonly>
						
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Nama Menu	:</label>
							<div class="col-md-7">
								<input type="text" class="form-control" placeholder="Nama Menu" name="nama_menu" value="<?php echo $hasil->nama_menu; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Harga</label>
							<div class="col-md-7">
								<input class="form-control" id="mask_number" type="text" name="harga" value="<?php echo $hasil->harga; ?>"/>
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Image Upload	:</label>
							<div class="col-md-7">
								<input type="file" class="form-control" name="gambar" value="<?php echo $hasil->gambar; ?>"/>
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