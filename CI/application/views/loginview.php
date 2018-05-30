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
