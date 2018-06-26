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
							<th>Status</th>
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
								<td><?php if($item->status == 0) echo "Canceling"; else if($item->status == 3) echo "Canceled"; ?></td>
								<td>
									<?php if($item->status != 3){ ?>
									<a href="<?php echo site_url('HomeUserController/editTransaksi/'.$item->id_transaksi) ?>"class="btn btn-info">Edit</a>
									<?php } ?>
									<a href="<?php echo site_url('HomeUserController/detailTransaksi/'.$item->id_transaksi) ?>" class="btn btn-success">Detail</a>
									<?php if($item->status == 1){ ?>
									<a href="<?php echo site_url('HomeUserController/cancelTransaksi/'.$item->id_transaksi) ?>" class="btn btn-danger">Cancel</a>
									<?php } ?>

									<?php if($item->status == 0){ ?>
									<a href="<?php echo site_url('HomeUserController/unCancelTransaksi/'.$item->id_transaksi) ?>" class="btn btn-warning">Uncancel</a>
									<?php }	 ?>
								</td>
							</tr>
						<?php $i++;} ?>
					</tbody>
				</table>
			</div>
		</div>
    </div>
</div>
