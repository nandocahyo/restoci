<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Halaman Pegawai | <small>( Aplikasi Restaurant )</small>
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
							<a href="#">
								Pembayaran
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
					 <div class="tabbable tabbable-custom boxless">
                  <ul class="nav nav-tabs">
                     <li class="active"><a href="#tab_0" data-toggle="tab">Data Order Hari ini</a></li>
					 <li><a href="#tab_1" data-toggle="tab">Data Sudah dibayar</a></li>
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane active" id="tab_0">
                       
						<!-- tabel untuk menampilkan data -->
							<div class="portlet box green">
                           <div class="portlet-title">
                              <div class="caption"><i class="fa fa-list"></i></div>
                              <div class="tools">
                                 <a href="javascript:;" class="collapse"></a>
                              </div>
                           </div>
						   <div class="portlet-body">
						<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                           <tr>
                              <th scope="col">No.</th>
                              <th scope="col"><i class="fa fa-qrcode"></i> QRcode</th>
                              <th scope="col"><i class="fa fa-tags"></i> ID Transaksi</th>
							  <th scope="col"><i class="fa fa-calendar"></i> Tgl Order</th>
                              <th scope="col"><i class="fa fa-user"></i> Nama</th>
                              <th scope="col"><i class="fa fa-cutlery"></i> Makanan</th>
                              <th scope="col"> qty mkn</th>
                              <th scope="col"><i class="fa fa-cutlery"></i> Minuman</th>
                              <th scope="col"> qty mnm</th>
                              <th scope="col"><i class="fa fa-money"></i> Total Bayar</th>
							  <th scope="col"><i class="fa fa-bookmark"></i> Status</th>
							  <th scope="col"><i class="fa fa-wrench"></i> Action</th>
                           </tr>
                        </thead>
                       <tbody>
					    <?php $no = 1;?>
							 <?php foreach($list1 as $row) { ?>
								
								<tr>
									<td><?php echo $no++;?></td>
									<td><img src="<?php echo base_url('assets/img/qrcode/'.$row->qrcode);?>" style="width:100px"></td>
									<td><?php echo $row->id_transaksi;?></td>
									<td><?php echo $row->tgl_order;?></td>
									<td><?php echo $row->nama;?></td>
									<td><?php echo $row->makanan;?></td>
									<td><?php echo $row->qty_mkn;?></td>
									<td><?php echo $row->nama_menu;?></td>
									<td><?php echo $row->qty_mnm;?></td>
									<td><?php echo $row->total_bayar;?></td>
									<td><span class="badge badge-md label-danger">
											 <?php echo $row->status;?>
										</span></td>
									<td><a href="<?php echo site_url('Transaksi/bayar/'.$row->id_transaksi); ?>"><i class='fa fa-money'></i> Bayar</a></td>
									
								
									
								</tr>
							 <?php } ?>
						</tbody>
                     </table>
						
                  
							</div>
                        </div>
						
                     </div>
					 <div class="tab-pane" id="tab_1">
                       
						<!-- tabel untuk menampilkan data -->
							<div class="portlet box green">
                           <div class="portlet-title">
                              <div class="caption"><i class="fa fa-list"></i></div>
                              <div class="tools">
                                 <a href="javascript:;" class="collapse"></a>
                              </div>
                           </div>
						   <div class="portlet-body">
						<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                           <tr>
                              <th scope="col">No.</th>
                              <th scope="col"><i class="fa fa-qrcode"></i> QRcode</th>
                              <th scope="col"><i class="fa fa-tags"></i> ID Transaksi</th>
							  <th scope="col"><i class="fa fa-calendar"></i> Tgl Order</th>
                              <th scope="col"><i class="fa fa-user"></i> Nama</th>
                              <th scope="col"><i class="fa fa-cutlery"></i> Makanan</th>
                              <th scope="col"> qty mkn</th>
                              <th scope="col"><i class="fa fa-cutlery"></i> Minuman</th>
                              <th scope="col"> qty mnm</th>
                              <th scope="col"><i class="fa fa-money"></i> Total Bayar</th>
							  <th scope="col"><i class="fa fa-bookmark"></i> Status</th>
							  <th scope="col"><i class="fa fa-wrench"></i> Action</th>
                           </tr>
                        </thead>
                       <tbody><?php $no = 1; ?>
							 <?php foreach($list2 as $row) { ?>
								
									
								<tr>
									<td><?php echo $no++;?></td>
									<td><img src="<?php echo base_url('assets/img/qrcode/'.$row->qrcode);?>" style="width:100px"></td>
									<td><?php echo $row->id_transaksi;?></td>
									<td><?php echo $row->tgl_order;?></td>
									<td><?php echo $row->nama;?></td>
									<td><?php echo $row->makanan;?></td>
									<td><?php echo $row->qty_mkn;?></td>
									<td><?php echo $row->nama_menu;?></td>
									<td><?php echo $row->qty_mnm;?></td>
									<td><?php echo $row->total_bayar;?></td>
									<td><span class="badge badge-md label-success">
											 <?php echo $row->status;?>
										</span></td>
									<td><a href="<?php echo site_url('Transaksi/cetak2/'.$row->id_transaksi); ?>"><i class='fa fa-print'></i> Print</a></td>
									
								
									
								</tr>
							 <?php } ?>
						</tbody>
                     </table>
						
                  
							</div>
                        </div>
						
                     </div>
               
                  </div>
               </div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->