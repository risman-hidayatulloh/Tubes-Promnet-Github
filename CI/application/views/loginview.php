<<<<<<< HEAD
<<<<<<< HEAD
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/loginview.css">
    <body class="text-center">
        <form class="form-signin"  method="post" action="<?php echo site_url('LoginController/ProsesLogin'); ?>">
            <img class="mb-4" src="<?php echo base_url('assets/lambang/honda.png'); ?>" alt="lambang honda" width="72" height="72">
            <?php if($status == true){?>
                <label>username / password salah</label>
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
=======
=======
>>>>>>> parent of 9dd83ae... update tampilan login(+session), home user
        <title>Changhong</title>
        
    </head>
    <body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url('HomePage/index')?>">Changhong</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <!-- <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-features">Features</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-reviews">Reviews</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-pricing">Pricing</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-faq">FAQ</a></li>
            <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="#" target="_blank"><span class="pb_rounded-4 px-4">Get Started</span></a></li>
          </ul>
        </div> -->
      </div>
    </nav>
    <!-- END nav -->



    <div class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity pb_gradient_v1 pb_slant-light">
      <div class="container">
        <br><br>
        <br>
          <div class="row">
              <div class="col-md-offset-3 col-md-6">
                <form action="<?php echo site_url('Register/Proses');?>" class="bg-white rounded pb_form_v1" method="post">
                  <h2 class="mb-4 mt-0 text-center">Register</h2>
                  <div class="form-group">
                    <input type="text" class="form-control pb_height-50 reverse" name="username" placeholder="username" required="">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control pb_height-50 reverse" name="email" placeholder="email" required="">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control pb_height-50 reverse" name="password" placeholder="password" required="" onkeyup='check();'>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control pb_height-50 reverse" name="password2" placeholder="re-password" required="" onkeyup='check();'>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill btn-shadow-blue" value="Register" name="submit">
                  </div>
                </form>
              </div>
          </div> 
        </div>
      </div>
    </div>
    <!-- END section -->


    <footer class="pb_footer bg-light" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p class="pb_font-14">&copy; 2018 Changhong Forum Disscussion. <br> Template by UI Cookies &amp; Developed by </a> <small>(Jihad Nur Shibgatullah & Muhammad Faris Muzakki)</small></p>
          </div>
        </div>
      </div>
    </footer>
    
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
<<<<<<< HEAD
>>>>>>> parent of 9dd83ae... update tampilan login(+session), home user
=======
>>>>>>> parent of 9dd83ae... update tampilan login(+session), home user
