<div class="left-content">
	<!--content-->
	<div class="content">
		<div class="women_main">
			<div class="row">
				<h2>Kode transaksi</h2>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Harga</th>
							<th>Jumlah</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; $total = 0; foreach($data as $tmp){ ?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $tmp->nama_part; ?></td>
							<td><?php echo $tmp->harga_ref_part; ?></td>
							<td><?php echo $tmp->jumlah; ?></td>
							<td><?php echo $tmp->harga_ref_part*$tmp->jumlah; ?></td>
						</tr>
						<?php $i++; $total = $total + $tmp->harga_ref_part*$tmp->jumlah; } ?>
					</tbody>
				</table>
				<p>Total Bayar: Rp.<?php echo number_format($total); ?></p>
			</div>
		</div>
		<br><a href="<?php 	echo site_url('HomeUserController/viewTransaksi'); ?>" class="btn btn-success">kembali</a>
    </div>
</div>
