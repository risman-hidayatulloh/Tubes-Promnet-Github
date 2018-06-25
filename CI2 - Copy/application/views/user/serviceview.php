<div class="left-content">
	<!--content-->
	<div class="content">
		<div class="women_main">
			<div class="row">
				<form class="form-group" action="<?php echo site_url('HomeUserController/serviceAction'); ?>" method="post">
					<div class="col-md-3">
						<select class="form-control" name="jenis">
							<option>Paket 1</option>
							<option>Paket 2</option>
							<option>Paket 3</option>
						</select>
					</div>
					
			</div>
			<div class="row">
				<div class="col-md-9">
					<h4 align="center">Data kendaraan</h4>
					<table class="table table-hover">
						<tbody>
							<tr>
								<td>Kode pelanggan</td>
								<td><input type="text" name="kodepelanggan" class="form-control"></td>
							</tr>
							<tr>
								<td>Nama Pemilik</td>
								<td><input type="text" name="namapemilik" class="form-control"></td>
							</tr>
							<tr>
								<td>Alamat pelanggan</td>
								<td><input type="text" name="alamat" class="form-control"></td>
							</tr>
							<tr>
								<td>No Polisi</td>
								<td><input type="text" name="nopolisi" class="form-control"></td>
							</tr>
							<tr>
								<td>No STNK</td>
								<td><input type="text" name="nostnk" class="form-control"></td>
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


			</main>
		</div>
    </div>
