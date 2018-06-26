        <script src=" <?php echo base_url('chartjs/Chart.bundle.js'); ?> "></script>
          <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
    </head>
    
<div class="sidebar-menu">
	<header class="logo1">
		<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
	</header>
	<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
        <div class="menu">
			<ul id="menu" >
				<li><a href="<?php echo site_url('HomeAdminController'); ?>"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
				<li><a href="<?php echo site_url('HomeAdminController/viewDataPembelian'); ?>"><i class="lnr lnr-chart-bars"></i> <span>Data Pembelian</span></a></li>
				<li><a href="<?php echo site_url('HomeAdminController/viewDataService'); ?>"><i class="lnr lnr-book"></i> <span>Data Service</span></a></li>
				<li><a href="<?php echo site_url('HomeAdminController/viewDataBayar'); ?>"><i class="lnr lnr-cart"></i> <span>Data Pembayaran</span></a></li>
				<li><a href="<?php echo site_url('HomeAdminController/pengajuanTransaksi'); ?>"><i class="lnr lnr-cart"></i> <span>Transaksi</span></a></li>
				<li><a href="<?php echo site_url('HomeAdminController/logOut'); ?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="left-content">
	<div class="inner-content">
		<!-- header-starts -->
		<div class="header-section">
			<!-- top_bg -->
			<div class="top_bg">
				<div class="header_top">
					<div class="top_right">
						<ul>
							<li><a href="#">help</a></li>|
							<li><a href="#">Contact</a></li>|
							<li><a href="#">Delivery information</a></li>
						</ul>
					</div>
					<div class="top_left">
						<h2><span></span> Call us : 012 3456 789</h2>
					</div> <div class="clearfix"> </div>
				</div>
			</div><div class="clearfix"></div>
			<!-- /top_bg -->
			</div>
			<div class="header_bg">
				<div class="header">
					<div class="head-t">
						<div class="row">
							<img src="<?php echo base_url('assets/lambang/honda.png'); ?>" class="img-responsive" alt="">
						</div>
					</div>
				</div>			
			</div>
		<!-- //header-ends -->
		</div>
	</div>
