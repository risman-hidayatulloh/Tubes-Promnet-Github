    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/loginview.css">
    <body class="text-center">
        <form class="form-signin"  method="post" action="<?php echo site_url('LoginController/ProsesLogin'); ?>">
            <img class="mb-4" src="<?php echo base_url('assets/lambang/honda.png'); ?>" alt="lambang honda" width="72" height="72">
            <?php if($status == true){?>
                <label>Username / Password salah</label>
            <?php } ?>
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <input type="text" class="form-control" placeholder="Username" required autofocus name="username">
            <input type="password" class="form-control" placeholder="Password" required name="password">
            <div class="checkbox mb-3">
                <label>
                <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <input name="submit" class="btn btn-lg btn-primary btn-block" type="submit">
            <p class="mt-5 mb-3 text-muted">Honda&copy; 2017-2018</p>
        </form>
        <title>Honda</title>
        
    </head>
    <body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

    



    
    <!-- loader -->
    <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1d82ff"/></svg></div>



    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/slick.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.mb.YTPlayer.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>

    <script src="<?php echo base_url();?>assets/js/main.js"></script>

    </body>
</html>

<script >
function check(){
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>
