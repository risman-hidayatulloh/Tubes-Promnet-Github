<div class="left-content">		
	<!--content-->
	<div class="content">
		
		<!-- data transaksi -->
		<form action="" class="form-group">
			<h2>Data transaksi</h2>
			<div class="row">
				<input type="date" name="date" class="form-control" value="<?php echo date("Y-m-d"); ?>" readonly>
			</div>
		</form>
		
		<!-- data kendadaraan untuk service -->
		<div class="women_main">
			<div class="row">
				<h3>Service</h3>
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
		</div>

		<!-- pembelian part -->
		<div class="women_main">
			<div class="row">
				<h3>Penjualan barang</h3>
				<form class="form-inline" autocomplete="off" method="post" action="<?php echo site_url('HomeUserController/tambahPembelian'); ?>">
					<input list="barang" name="barang" class="form-control" placeholder="barang" >	
						<datalist id="barang">
							<?php foreach($barang as $tmp){?>
							<option value="<?php echo $tmp->nama_part; ?>">
							<?php } ?>
						</datalist>
					<input type="number" name="jumlah" class="form-control" placeholder="jumlah">
					<input type="submit" name="submit" class="btn btn-primary" value="tambah">
				</form>
			</div>
		</div>


		<div class="women_main">
				
				<div class="row">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Barang</th>
								<th>Nama Barang</th>
								<th>Harga</th>
								<th>Jumlah</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; $total = 0; foreach($data as $item){?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $item->kode_part; ?></td>
								<td><?php echo $item->nama_part; ?></td>
								<td><?php echo $item->harga_ref_part; ?></td>
								<td><?php echo $item->jumlah; ?></td>
								<td><a href="<?php echo site_url('HomeUserController/deletePembelian/'.$item->id_part); ?>" class="btn btn-danger">delete</a></td>
							</tr>
							<?php $i++; $total = $total + $item->harga_ref_part;} ?>
						</tbody>
					</table>
				</div><br>
				<?php if($pelanggan != null){ ?>
				<div class="row">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Nama Pemilik</th>
								<th>Alamat Pemilik</th>
								<th>No Polisi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pelanggan as $tmp) {?>
							<tr>
								<td><?php echo $tmp->nama_pelanggan; ?></td>
								<td><?php echo $tmp->alamat_pelanggan; ?></td>
								<td><?php echo $tmp->plat_nomor; ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<?php } ?>
				<div class="row">
					<div class="col-md-4">
				
						<p>Total Bayar: Rp.<?php echo number_format($total); ?></p>
					</div>
				</div>
				<a href="<?php echo site_url('HomeUserController/printPembayaran'); ?>" class="btn btn-success">print</a>
				<a href="<?php echo site_url('HomeUserController/bayar'); ?>" class="btn btn-primary">Bayar</a>
			</main>
		</div>
    </div>

