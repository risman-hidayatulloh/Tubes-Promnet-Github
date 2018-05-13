<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    {{-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> --}}
    <!-- Bootstrap Core CSS -->
    <link rel='stylesheet' type='text/css' href="/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link  rel='stylesheet' type='text/css' href="/css/style.css">
    <!-- Graph CSS -->
    <link rel="stylesheet" href="/css/font-awesome.css">
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link href="{{ asset('css/icon-font.min.css') }}" rel="stylesheet" type='text/css' />
    <script src="{{ asset('js/amcharts.js') }}"></script>	
    <script src="{{ asset('js/serial.js') }}"></script>	
    <script src="{{ asset('js/light.js') }}"></script>	
    <!-- //lined-icons -->
    <script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
</head>
<body>

	<!-- app = assets/js/app.js -->
	<div id="app">
        <div class="left-content">
            <div class="inner-content">
                <!-- header-starts -->
                <div class="header-section">
                    <!-- top_bg -->
					<div class="top_bg">
                        <div class="header_top">
                            <div class="top_right">
                                <ul> <!-- router-link = assets/js/app.js and inport di public-->
                                    <li><router-link class="nav-link" to="/mekanik">Mekanik</<router-link></li>|
                                    <li><router-link class="nav-link" to="/example">Example</<router-link></li>|
                                    <li><router-link class="nav-link" to="/sample">Sample</<router-link></li>
                                </ul>
                            </div>
                            <div class="top_left">
                                <h2><span></span>Workshop - Vue & Laravel</h2>
                            </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
				    <!-- /top_bg -->
                    </div>
                    <div class="header_bg">
						
                        <div class="header">
                            <div class="head-t">
                                <div class="logo">
                                    <img src="images/logo.png" class="img-responsive" alt="">
                                </div>
                                    <!-- start header_right -->
                                <div class="header_right">
                                    <div class="rgt-bottom">
                                        Silahkan Login
                                        </br></br>
                                        <div class="log">
                                            <div class="login">
                                                <div id="loginContainer"><a id="loginButton" class=""><span>Login</span></a>
                                                    <div id="loginBox" style="display: none;">                
                                                        <form id="loginForm">
                                                                <fieldset id="body">
                                                                    <fieldset>
                                                                          <label for="email">Email Address</label>
                                                                          <input type="text" name="email" id="email">
                                                                    </fieldset>
                                                                    <fieldset>
                                                                            <label for="password">Password</label>
                                                                            <input type="password" name="password" id="password">
                                                                     </fieldset>
                                                                    <input type="submit" id="login" value="Sign in">
                                                                    <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                                                </fieldset>
                                                            <span><a href="#">Forgot your password?</a></span>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reg">
                                            <a href="register.html">REGISTER</a>
                                        </div>
                                    <div class="create_btn">
                                        <a href="checkout.html">CHECKOUT</a>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="search">
                                    <form>
                                        <input type="text" value="" placeholder="search...">
                                        <input type="submit" value="">
                                    </form>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                
                </div>
                <!-- //header-ends -->    
            test aja
        </div>
        
        <!-- router = assets/js/app.js -->
        <router-view></router-view>
    </div>
    <!-- javascript -->
    <script> window.Laravel = <?php echo json_encode([ 'csrfToken' => csrf_token(), ]); ?></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>