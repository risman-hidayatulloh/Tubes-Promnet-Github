	<div class="sidebar-menu">
		<header class="logo1">
			<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
		</header>
		<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
            <div class="menu">
				<ul id="menu" >
					<li><a href="<?php echo site_url('HomeUserController'); ?>"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
					<li><a href="<?php echo site_url('HomeUserController/viewPembelian'); ?>"><i class="lnr lnr-chart-bars"></i> <span>Pembelian</span></a></li>
					<li><a href="<?php echo site_url('HomeUserController/viewService'); ?>"><i class="lnr lnr-book"></i> <span>Service</span></a></li>
					<li><a href="<?php echo site_url('HomeUserController/viewPembayaran'); ?>"><i class="lnr lnr-cart"></i> <span>Pembayaran</span></a></li>
					<li><a href="<?php echo site_url('HomeUserController/logOut'); ?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
				</ul>
			</div>
		</div>
	</div>
