			 <div class="row">
			 	<div class="col-md-3">
					<form class="form-group" action="<?php echo site_url('HomeAdminController/filterDataBayar'); ?>" method="post">
				 		<label>Berdasarkan</label>
				 			<select class="form-control" name="berdasarkan">
				 				<option>Transaksi</option>
				 				<option>Tanggal</option>
				 				<option>Bulan</option>
				 				<option>Tahun</option>
				 		</select>
				 		<input type="submit" name="submit" class="form-control">
					</form>
			 	</div>
			 </div>

			 <div class="container">
			 	<div class="row">
		            <canvas id="myChart" width="10" height="10"></canvas>
			 	</div>
	        </div>
	        <script>
	            var ctx = document.getElementById("myChart");
	            var myChart = new Chart(ctx, {
	                type: 'bar',
	                data: {
	                	labels :[<?php foreach($data as $tmp){ echo '"'.$tmp->waktu.'",'; } ?>], 
	                    // labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
	                    datasets: [{
	                            // label: '# of Votes',
	                            data: [<?php foreach($data as $tmp){echo $tmp->bayar.',';} ?>],
	                            // data: [12, 19, 3, 5, 2, 3],
	                            backgroundColor: [
	                                'rgba(255, 99, 132, 0.2)',
	                                'rgba(54, 162, 235, 0.2)',
	                                'rgba(255, 206, 86, 0.2)',
	                                'rgba(75, 192, 192, 0.2)',
	                                'rgba(153, 102, 255, 0.2)',
	                                'rgba(255, 159, 64, 0.2)'
	                            ],
	                            borderColor: [
	                                'rgba(255,99,132,1)',
	                                'rgba(54, 162, 235, 1)',
	                                'rgba(255, 206, 86, 1)',
	                                'rgba(75, 192, 192, 1)',
	                                'rgba(153, 102, 255, 1)',
	                                'rgba(255, 159, 64, 1)'
	                            ],
	                            borderWidth: 1
	                        }]
	                },
	                options: {
	                    scales: {
	                        yAxes: [{
	                                ticks: {
	                                    beginAtZero: true
	                                }
	                            }]
	                    }
	                }
	            });
	        </script>


			</main>
		</div>
    </div>