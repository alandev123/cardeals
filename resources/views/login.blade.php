
<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Key Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <link rel="stylesheet" href="css/style1.css" type="text/css" media="all">


    <link rel="stylesheet" href="css/font-awesome1.min.css" type="text/css" media="all">

	<link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">


</head>
<body>
<section class="main">
	<div class="layer">

		<div class="bottom-grid">
			<div class="logo">
				<!-- <h1> <a href="#"><span class="fa fa-key"></span> Key</a></h1> -->
			</div>
			<div class="links">
				<ul class="links-unordered-list">
				<li class="active">
						<a href="/" class="">Home</a>
					</li>
					<li class="active">
						<a href="/logincar" class="">Login</a>
					</li>
					<li class="">
						<a href="#" class="">About Us</a>
					</li>
					<li class="">
						<a href="/firstreg" class="">Register</a>
					</li>
					{{-- <li class="">
						<a href="#" class="">Dealer</a>
					</li> --}}
				</ul>
			</div>
		</div>
		<div class="content-w3ls">
			<div class="text-center icon">
				<!-- <span class="fa fa-html5"></span> -->
			</div>
			<div class="content-bottom">
				<form action="{{Route('ulogin.store')}}" method="post">
          @csrf
					<div class="field-group">
						<span class="fa fa-user" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="email" id="text1" type="text" value="" placeholder="Username" required>
						</div>
					</div>
					<div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="password" id="myInput" type="Password" placeholder="Password">
						</div>
					</div>
					<div class="right">
						@isset($msg)
						<div class="alert alert-warning" role="alert" style="color:red;">
							{{ $msg }}
					</div>
					@endisset
					</div>
					<div class="wthree-field">
						<button type="submit" class="btn">Log In</button>
					</div>
					<ul class="list-login">
						<li class="switch-agileits">
							<label class="switch">
								<input type="checkbox">
								<span class="slider round"></span>
								keep Logged in
							</label>
						</li>
						<li>
						<a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
						</li>
						<li class="clearfix"></li>
					</ul>
					<ul class="list-login-bottom">
						<li class="">
							<a href="/firstreg" class="">Create Account</a>
						</li>
						<li class="">
							<a href="#" class="text-right">Need Help?</a>
						</li>
						<li class="clearfix"></li>
					</ul>
				</form>
			</div>
		</div>
		<!-- <div class="bottom-grid1">
			<div class="links">
				<ul class="links-unordered-list">
					<li class="">
						<a href="#" class="">About Us</a>
					</li>
					<li class="">
						<a href="#" class="">Privacy Policy</a>
					</li>
					<li class="">
						<a href="#" class="">Terms of Use</a>
					</li>
				</ul>
			</div> -->
			<!--div class="copyright">
				<p>© 2019 Key. All rights reserved | Design by
					<a href="http://w3layouts.com">W3layouts</a>
				</p>
			</div-->
		</div>
    </div>
</section>
</body>
</html>
