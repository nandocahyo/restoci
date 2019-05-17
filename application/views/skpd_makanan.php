<div class="row">
<?php foreach($data2 as $hasil) { ?>
	<div class="col-sm-6">
	<label for="activities">Harga Makanan /porsi :</label>
	<input type="text" class="form-control" name="harga_makanan" value="<?php echo $hasil->harga;?>" readonly>
	</div>
<?php } ?>
									
										<div class="col-sm-6">
											<div class="form-group">
												<label for="activities">Qty :</label>
												<input type='number' min='1' class="form-control" name="qty_mkn">
											</div>
										</div>
</div>
	