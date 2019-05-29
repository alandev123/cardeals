@if(session()->has('email'))

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car-Deals</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<script type="text/javascript" src="old/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="old/js/jquery.min.js"></script>
    {{-- <script type="text/javascript" src="old/js/sastest.js"></script> --}}
    <script src="js/modelview.js"></script>
    <script src="js/varientview.js"></script>
		<script src="js/cardet.js"></script>
		
		<link rel="stylesheet" href="style.css">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="./img/core-img/logo2.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="old/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="old/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="old/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="old/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="old/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="old/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="old/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="old/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="old/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="old/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="old/css/util.css">
	<link rel="stylesheet" type="text/css" href="old/css/main.css">

<!--===============================================================================================-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body  class="animsition"> <!-- -->
<div style="background-color: #B4B4A4">
	<!-- Header -->
	<header>
			<!-- Header desktop -->
			<div class="wrap-menu-header gradient1 trans-0-4">
				<div class="container h-full">
					<div class="wrap_header trans-0-3">
						<!-- Logo -->
						<div class="logo">
							<a href="/uhome">
							<img src="old/images/icons/logo.PNG" style="border-radius: 30%">
							</a>
						</div>
	
						<!-- Menu -->
						<div class="wrap_menu p-l-45 p-l-0-xl">
							<nav class="menu">
								<ul class="main_menu">
									<li>
										<a href="/uhome">Home</a>
									</li>
	
									<li>
										<a href="/uviewcar">Cars</a>
									</li>
	
									<li>
										<a href="/usedcarhome">Usedcar</a>
									</li>
	
									
									<li>
										<a href="/logout">Logout</a>
									</li>
	
	
								</ul>
							</nav>
						</div>
	
						<!-- Social -->
						<div class="social flex-w flex-l-m p-r-20">
							
	
	
							<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
						</div>
					</div>
				</div>
				</div>
				</header>

		<div class="container">
			<h3 class="tit7 t-center p-b-62 p-t-105">
				Select Car </h3>

	<!-- Booking -->
	<!--section class="section-booking bg1-pattern p-t-100 p-b-110"-->
		<div class="container">
			
				<div class="col-lg-12 p-b-30">
				

					<form action="/book" class="wrap-form-booking" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="row" style="margin-left:-10%; margin-right:-10%;">
													<div class="col-12">
													
														<div class="col-4" style="margin-left:-15px;">
				              										<label>Select Make</label>
				              	 <select name="companyname" id="companyname" class="form-control mb-30" style="height:40px;" required>
				              			 <option disabled="disabled" selected="selected">Select</option>
				              			 @isset($request)
				              			
				              			 @foreach($request as $ca)
				              			
				              				<option value="{{$ca->id}}">{{$ca->name}}</option>
				              			 @endforeach
				              			 @endisset
				              		</select>
											</div>
												<div class="row">
                          <div class="col-4">
                                         <label>Select Model</label>
                        <select name="modelname" id="modelname" class="form-control mb-30" style="height:40px;" onchange="modeldet(this.value)" required>
                            <option disabled="disabled" selected="selected">Select</option>
                            
                         </select>
                          </div>
                          <div class="col-4">
                             <label>Select Varient</label>
                             <select name="varient" id="varient" class="form-control mb-30" style="height:40px;" onchange="cardets(this.value)" required>
                                <option disabled="disabled" selected="selected">Select</option>
                             </select>
                         </div>
					 </div>
					 <br/>
					 
					<h2>Core Features</h2>
					<div class="row"> 
					   <div class="col-4">
						   <label >Type</label>
						   <input type="text" id="cartypec" name="cartypec" class="form-control mb-30" readonly>
						</div>  
				
						<div class="col-4">
							<label >Displacement CC</label>
							<input type="text" id="ccc" name="ccc" class="form-control mb-30" readonly>
						 </div>  
						 
							   
						 <div class="col-3" id="img" > 

						</div> 
						  
														
				</div><!--  row end div  -->
				<div class="row"> 
					  
			 
					 <div class="col-4">
						 <label >Max Power</label>
						 <input type="text" id="powerc" name="powerc" class="form-control mb-30" readonly>
					  </div>  
					  <div class="col-4">
						 <label >Mileage in KMPL</label>
						 <input type="text" id="milagec" name="milagec" class="form-control mb-30" readonly>
					  </div>      
					  
					 
									   
			 </div><!--  row end div  -->
			 <div class="row"> 
					<div class="col-4">
				<label >Ex Showroom Price  In Lakh</label>
				<input type="text" id="price" name="price" class="form-control mb-30" readonly>
			 </div>
			 
				   
				 <div class="col-4">
					 <label >Transmission</label>
					 <input type="text" id="transc" name="transc" class="form-control mb-30" readonly>
					</div>   

				
				
									
		</div><!--  row end div  -->

									</div>
				<div style="margin-left:300px;">
									<center><input type="submit" class="form-control btn-success" value="Place Your Booking" style="width:800px;"></center>
				</div>
					</form>

			</div>
		</div>
	<!--/section-->

		</div>
</div>


	<footer class="bg1">

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<!--a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a-->
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2018 Alan Devasia<i class="fa fa-heart"></i>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>
</div>


<!--===============================================================================================-->
    <script type="text/javascript" src="old/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="old/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="old/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="old/vendor/bootstrap/js/popper.js"></script>

<!--===============================================================================================-->
	<script type="text/javascript" src="old/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="old/vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="old/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="old/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="old/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="old/vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="old/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="old/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="old/js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="old/js/main.js"></script>




	<script type="text/javascript">

	</script>
</div>
</body>
</html>


@endif