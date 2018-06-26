<div class="left-content">		
	<!--content-->
	<div class="content">

		<!-- pembelian part -->
		<div class="women_main">

			<div class="row">
				<div class="col-md-9">
					<h4 align="center">Data Stok</h4>
					<table class="table table-hover">
						<tbody>
							<tr>
								<td>Nama Part</td>
								<td><div class="row">
									<form class="form-inline" autocomplete="off" method="post" action="<?php echo site_url('HomeAdminController/StokAction'); ?>">
										<select list="barang" name="barang" class="form-control" placeholder="barang" >	
											<datalist id="barang">
												<?php foreach($barang as $tmp){?>
												<option value="<?php echo $tmp->id_part; ?>"><?php echo $tmp->nama_part; ?>
												</option>

												<?php } ?>
											</datalist>
										</select>
								</div></td>
							</tr>
							<tr>
								<td>Kode Seri</td>
								<td><input type="text" name="kodeseri" class="form-control"></td>
							</tr>
							
									
						</tbody>
					</table>
				</div>
			</div>

			

			

			<div class="row">
				<div class="col-md-10">
					<center>
						<input type="submit" name="submit" class="btn btn-primary">
						</form>
					</center>
				</div>
			</div>

		</div>


		
    </div>
