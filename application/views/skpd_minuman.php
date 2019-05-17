<div class="row">
<?php foreach($data1 as $hasil) { ?>
	<div class="col-sm-6">
	<label for="activities">Harga Minuman /porsi :</label>
	<input type="text" class="form-control" name="harga_minuman" value="<?php echo $hasil->harga;?>" readonly>
	</div>
<?php } ?>
									<div class="col-sm-6">
											<div class="form-group">
												<label for="activities">Qty :</label>
												<input type='number' min='1' class="form-control" name="qty_mnm">
											</div>
										</div>
</div>