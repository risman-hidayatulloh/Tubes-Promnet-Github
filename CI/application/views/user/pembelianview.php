			<div class="row">
				<form action="<?php echo base_url('index.php/HomeUserController/search') ?>" method="post" class="form-group">
					<div class="col-md-9">
						<input type="text" name="cari" placeholder="cari" class="form-control">
					</div>
					<div class="col-md-1">
						<input type="submit" name="submit" class="btn btn-primary" value="cari">
					</div>
				</form>
			</div>
			<div class="row">
				
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Barang</th>
							<th>Nama Barang</th>
							<th>Harga</th>
							<th>Stok</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; foreach($data as $item){ ?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $item->kode_part; ?></td>
								<td><?php echo $item->nama_part; ?></td>
								<td><?php echo $item->harga_ref_part; ?></td>
								<td></td>
								<td><a href="<?php echo site_url('HomeUserController/tambahPembelian/'.$item->id_part); ?>" class="btn btn-primary">Beli</a></td>
							</tr>
						<?php $i++;} ?>
					</tbody>

				</table>


			</div>



			</main>
		</div>
    </div>