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
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<div class="table-toolbar">
			
		<div class="modal fade" id="basik" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Form Input Data Menu Makanan</h4>
			</div>
		<div class="modal-body">
		<div class="portlet-body form">
					<!-- BEGIN FORM-->
			<form action="Menu/tambah_menu_mkn" class="form-horizontal" enctype="multipart/form-data" method="post">						
				<div class="form-body">
					<div class="form-group">
						<label class="col-md-3 control-label">Type	:</label>
						<div class="col-md-7">
							<input type="text" class="form-control" name="type" value="makanan" readonly>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Nama Menu	:</label>
						<div class="col-md-7">
							<input type="text" class="form-control" placeholder="Nama Menu" name="nama_menu">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Harga</label>
						<div class="col-md-7">
							<input class="form-control" id="mask_number" type="text" name="harga"/>
							</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Image Upload	:</label>
						<div class="col-md-7">
							<input type="file" class="form-control" name="gambar"/>
						</div>	
					</div>
					<!-- END FORM-->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn red">Submit</button>
				</div>
			</form>
		</div>
		</div>
		</div>	
									<!-- /.modal-content -->
		</div>
								<!-- /.modal-dialog -->
		</div>
		
		<div class="modal fade" id="basik1" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Form Input Data Menu Minuman</h4>
			</div>
		<div class="modal-body">
		<div class="portlet-body form">
					<!-- BEGIN FORM-->
			<form action="Menu/tambah_menu_mnm" class="form-horizontal" enctype="multipart/form-data" method="post">						
				<div class="form-body">
					<div class="form-group">
						<label class="col-md-3 control-label">Type	:</label>
						<div class="col-md-7">
							<input type="text" class="form-control" name="type" value="minuman" readonly>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Nama Menu	:</label>
						<div class="col-md-7">
							<input type="text" class="form-control" placeholder="Nama Menu" name="nama_menu">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Harga</label>
						<div class="col-md-7">
							<input class="form-control" id="mask_number" type="text" name="harga"/>
							</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Image Upload	:</label>
						<div class="col-md-7">
							<input type="file" class="form-control" name="gambar"/>
						</div>	
					</div>
					<!-- END FORM-->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn red">Submit</button>
				</div>
			</form>
		</div>
		</div>
		</div>	
									<!-- /.modal-content -->
		</div>
								<!-- /.modal-dialog -->
		</div>
								
		</div>
		<?php echo $pesan; ?>		
		<div class="row">
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cutlery"></i>Daftar Makanan
							</div>
						</div>
						
						<div class="portlet-body"><div class="btn-group">
							<button id="" class="btn red" data-toggle="modal" href="#basik">
								Tambah Data <i class="fa fa-plus"></i>
							</button>
						</div> <br><br>
							<table class="table table-striped table-bordered table-hover" id="sample_2">
							<thead>
							<tr>
								<th>
									 Photo
								</th>
								<th>
									 Makanan
								</th>
								<th>
									 Harga
								</th>
								<th>
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
								 <?php foreach($list1 as $row) { ?>
									<tr>
									<td><img src="<?php echo base_url('assets/img/menu/'.$row->gambar);?>" width="200px" height="167px"></td>
									<td style="padding-top:80px"><?php echo $row->nama_menu;?></td>
									<td style="padding-top:80px"><?php echo $row->harga;?></td>
									<td style="padding-top:60px"><a href="<?php echo site_url('Menu/ubah_data_menu_mkn/'.$row->id_menu); ?>"><i class='fa fa-edit'></i> Edit</a><br><br>
										<a href="<?php echo site_url('Menu/hapus_data_menu_mkn/'.$row->id_menu); ?>"
											onClick="return confirm('Are you sure you want to delete?')"><i class='fa fa-trash-o'></i> Hapus</a></td>
									</tr>
								<?php } ?>	
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-beer"></i>Daftar Minuman
							</div>
						</div>
						<div class="portlet-body"><div class="btn-group">
							<button id="" class="btn red" data-toggle="modal" href="#basik1">
								Tambah Data <i class="fa fa-plus"></i>
							</button>
						</div> <br><br>
							<table class="table table-striped table-bordered table-hover" id="sample_3">
							<thead>
							<tr>
								<th>
									 Photo
								</th>
								<th>
									 Minuman
								</th>
								<th>
									 Harga
								</th>
								<th>
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
									 <?php foreach($list2 as $row) { ?>
									<tr>
									<td><img src="<?php echo base_url('assets/img/menu/'.$row->gambar);?>" width="200px" height="167px"></td>
									<td style="padding-top:80px"><?php echo $row->nama_menu;?></td>
									<td style="padding-top:80px"><?php echo $row->harga;?></td>
									<td style="padding-top:60px"><a href="<?php echo site_url('Menu/ubah_data_menu_mnm/'.$row->id_menu); ?>"><i class='fa fa-edit'></i> Edit</a><br><br>
										<a href="<?php echo site_url('Menu/hapus_data_menu_mnm/'.$row->id_menu); ?>"
											onClick="return confirm('Are you sure you want to delete?')"><i class='fa fa-trash-o'></i> Hapus</a></td>
									</tr>
									<?php } ?>	
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			
		
	</div>
</div>
			<!-- END PAGE CONTENT-->