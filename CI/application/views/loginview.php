     </head>
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
    </body>
</html>

<style>
    html,
    body {
    height: 100%;
    }

    body {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-align: center;
    -ms-flex-pack: center;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
    }

    .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
    }
    .form-signin .checkbox {
    font-weight: 400;
    }
    .form-signin .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
    }
    .form-signin .form-control:focus {
    z-index: 2;
    }
    .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    }
</style>
