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
			<div class="btn-group">
				<button id="" class="btn red" data-toggle="modal" href="#basik">
					Tambah Data <i class="fa fa-plus"></i>
				</button>
			</div>
		<div class="modal fade" id="basik" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Form Input Data Pegawai</h4>
			</div>
		<div class="modal-body">
		<div class="portlet-body form">
					<!-- BEGIN FORM-->
			<form action="Pegawai/tambah_pegawai" class="form-horizontal" enctype="multipart/form-data" method="post">						
				<div class="form-body">
					<div class="form-group">
						<label class="control-label col-md-3">NIP</label>
						<div class="col-md-7">
							<input class="form-control" type="text" name="nip" placeholder="NIP"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Username</label>
						<div class="col-md-7">
							<input type="text" class="form-control" placeholder="Username" name="username">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Password</label>
						<div class="col-md-7">
							<input type="password" class="form-control" placeholder="Password" name="password">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Nama</label>
						<div class="col-md-7">
							<input type="text" class="form-control" placeholder="Nama Pegawai" name="nama">
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
				<div class="col-md-12 col-sm-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-users"></i>Daftar Pegawai
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_2">
							<thead>
							<tr>
								<th>
									 NIP
								</th>
								<th>
									 Username
								</th>
								<th>
									 Password
								</th>
								<th>
									 Nama
								</th>
								<th>
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
								 <?php foreach($list as $row) { ?>
									<tr>
									<td style="padding-top:18px"><?php echo $row->nip;?></td>
									<td style="padding-top:18px"><?php echo $row->username;?></td>
									<td style="padding-top:18px"><?php echo $row->password;?></td>
									<td style="padding-top:18px"><?php echo $row->nama;?></td>
									<td><a href="<?php echo site_url('Pegawai/ubah_data_pegawai/'.$row->id); ?>"><i class='fa fa-edit'></i> Edit</a><br>
										<a href="<?php echo site_url('Pegawai/hapus_data_pegawai/'.$row->id); ?>"
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