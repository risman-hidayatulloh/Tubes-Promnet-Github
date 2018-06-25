<div class="left-content">
	<!--content-->
	<div class="content">
		<div class="women_main">

			<div class="row">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Transaksi</th>
							<th>Tanggal</th>
							<th>Total Harga</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; foreach($data as $item){ ?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $item->kode_transaksi; ?></td>
								<td><?php echo $item->waktu; ?></td>
								<td><?php echo $item->bayar; ?></td>
								<td><a href="<?php echo site_url('HomeUserController/detailTransaksi/'.$item->id_transaksi) ?>" class="btn btn-success">Detail</a>
									<a href="<?php echo site_url('HomeUserController/deleteTransaksi/'.$item->id_transaksi)" class="btn btn-danger">Delete</a>
								</td>
								
							</tr>
						<?php $i++;} ?>
					</tbody>
				</table>
			</div>
		</div>
    </div>
</div>
