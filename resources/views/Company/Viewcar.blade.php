@if(session()->has('email'))

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Compare</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<script type="text/javascript" src="old/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="old/js/jquery.min.js"></script>
    {{-- <script type="text/javascript" src="old/js/sastest.js"></script> --}}
    
    <script src="js/varientview.js"></script>
    <script src="js/cardet.js"></script>
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
	<link rel="stylesheet" type="text/css" href="css/table.css">
<!--===============================================================================================-->

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
						<a href="mhome.php">
						<img src="old/images/icons/logo.PNG" style="border-radius: 30%">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="/companyhome">Home</a>
								</li>

								<li>
									<a href="addcar">Cars</a>
								</li>

								<li>
									<a href="/addfeat">Car Details</a>
								</li>

								<li>
									<a href="#">Dealer</a>
								</li>

								<li>
									<a href="/logout">Logout</a>
								</li>


							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="mprofile.php"><i class="fa fa-user" aria-hidden="true"> &nbsp Profile</i></a>


						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
			</div>
			</header>

		


		<div class="container">
			<h3 class="tit7 t-center p-b-62 p-t-105">
				Select Your Cars </h3>

	<!-- Booking -->
	<!--section class="section-booking bg1-pattern p-t-100 p-b-110"-->
		<div class="container">
			
				<div class="col-lg-12 p-b-30">
					<!--div class="t-center">
						<span class="tit2 t-center">

						</span>

						<br/>
						<br/>
						<br/>
						<br/>
					</div-->

					<form action="#" class="wrap-form-booking" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="row">
                          <div class="col-3">
                                         <label>Select Model</label>
                        <select name="modelname" id="modelname" class="form-control mb-30" style="height:40px;">
                            <option disabled="disabled" selected="selected">Select</option>
                            @isset($request)
                           
                            @foreach($request as $car)
                           
                             <option value="{{$car->car_id}}">{{$car->carname}}</option>
                            @endforeach
                            @endisset
                         </select>
                          </div>
                          <div class="col-3">
                             <label>Select Varient</label>
                             <select name="varient" id="varient" class="form-control mb-30" style="height:40px;" onchange="cardets(this.value)">
                                <option disabled="disabled" selected="selected">Select</option>
                             </select>
                         </div>
					 </div>
					 <br/>
					 
					<h2>Core Features</h2>
					<div class="row"> 
					   <div class="col-3">
						   <label >Type</label>
						   <input type="text" id="cartypec" class="form-control mb-30" readonly>
						</div>  
				
						<div class="col-3">
							<label >Displacement</label>
							<input type="text" id="ccc" class="form-control mb-30" readonly>
						 </div>  
						 
							   
						 <div class="col-3" id="img" > 

						</div> 
						  
														
				</div><!--  row end div  -->
				<div class="row"> 
					  
			 
					 <div class="col-3">
						 <label >Max Power</label>
						 <input type="text" id="powerc" class="form-control mb-30" readonly>
					  </div>  
					  <div class="col-3">
						 <label >Milage</label>
						 <input type="text" id="milagec" class="form-control mb-30" readonly>
					  </div>      
					  
					 
									   
			 </div><!--  row end div  -->
			 <div class="row"> 
					<div class="col-3">
				<label >Max Torque</label>
				<input type="text" id="torquec" class="form-control mb-30" readonly>
			 </div>
			 
				   
				 <div class="col-3">
					 <label >Transmission</label>
					 <input type="text" id="transc" class="form-control mb-30" readonly>
					</div>   
				
									
		</div><!--  row end div  -->
			 <br>
			 <br>
		 <div class="panel-group" id="accordion">
			<div class="panel panel-default">
			  <div class="panel-heading">
			  <center> <h2 class="panel-title">
				  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Engine & Transmission</a>
				</h2></center>
			  </div>
			  <div id="collapse1" class="panel-collapse collapse">
			  <div class="panel-body">
	   <div class="row"> <!-- ROW STARTED-->
			   <div class="col-3">
					<label >Displacement</label>
					<input type="text" id="cc" class="form-control mb-30" readonly>
				  </div>  
			   <div class="col-3">
				  <label >Engine Description</label>
				  <input type="text" id="endes" class="form-control mb-30" readonly>
			   </div>  
				
			   <div class="col-3">
				  <label >Max Power</label>
				  <input type="text" id="power" class="form-control mb-30" readonly>
				 </div>   
				 <div class="col-3">
				<label >Max Torque</label>
				<input type="text" id="torque" class="form-control mb-30" readonly>
				</div>      
	   </div>	
	   <div class="row"> <!-- ROW STARTED-->
		  
		<div class="col-3">
		   <label >No. of Cylinder</label>
		   <input type="text" id="cylinder" class="form-control mb-30" readonly>
		</div>  
		 
		<div class="col-3">
		   <label >Valves per Cylinder</label>
		   <input type="text" id="valves" class="form-control mb-30" readonly>
		</div>  
		<div class="col-3">
				<label >Clutch Type</label>
				<input type="text" id="clutch" class="form-control mb-30" readonly>
		 </div>  
		 <div class="col-3">
				<label >Drive Type</label>
				<input type="text" id="dtype" class="form-control mb-30" readonly>
				</div>  

	</div>
	 <div class="row"> <!-- ROW STARTED-->
	
		<div class="col-3">
		   <label >Fuel Supply System</label>
		   <input type="text" id="fsupply" class="form-control mb-30" readonly>
		</div>  
		 
		<div class="col-3">
		   <label >Transmission</label>
		   <input type="text" id="trans" class="form-control mb-30" readonly>
		</div>   
		<div class="col-3">
				<label >Gear</label>
				<input type="text" id="gear" class="form-control mb-30" readonly>
				</div>       
</div>			   


			</div>
			</div>
			</div>			  
			</div>
			<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
						<center> <h2 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Performance & Fuel</a>
						</h2></center>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">
				 <div class="row"> <!-- ROW STARTED-->
						 <div class="col-3">
							<label >Max Speed</label>
							<input type="text" id="speed" class="form-control mb-30" readonly>
							</div>  
						 <div class="col-3">
							<label >Acceleration</label>
							<input type="text" id="acce" class="form-control mb-30" readonly>
						 </div>  
						
						 <div class="col-3">
							<label >Braking</label>
							<input type="text" id="braking" class="form-control mb-30" readonly>
						 </div>  
						 <div class="col-3">
								<label >Fuel Type</label>
								<input type="text" id="fuel" class="form-control mb-30" readonly>
						 </div>        
				 </div>	
				 <div class="row"> <!-- ROW STARTED-->
				<div class="col-3">
					 <label >Milage</label>
					 <input type="text" id="milage" class="form-control mb-30" readonly>
					 </div>  		 
				 
				<div class="col-3">
					 <label >Fuel Tank capacity</label>
					 <input type="text" id="tcapacity" class="form-control mb-30" readonly>
				</div>         
			</div>
				</div>
					</div>
					</div>			  
					</div>


					<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
								<center> <h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Suspension & Steering</a>
								</h2></center>
								</div>
								<div id="collapse3" class="panel-collapse collapse">
								<div class="panel-body">
						 <div class="row"> <!-- ROW STARTED-->
								 <div class="col-3">
									<label >Front Suspension</label>
									<input type="text" id="fsus" class="form-control mb-30" readonly>
									</div>  
								 <div class="col-3">
									<label >Rear Suspension</label>
									<input type="text" id="rsus" class="form-control mb-30" readonly>
								 </div>  
								
								 <div class="col-3">
									<label >Shock Absorber Type</label>
									<input type="text" id="shock" class="form-control mb-30" readonly>
								 </div>  
								 <div class="col-3">
										<label >Steering Type</label>
										<input type="text" id="steert" class="form-control mb-30" readonly>
								 </div>        
						 </div>	
						 <div class="row"> <!-- ROW STARTED-->
						<div class="col-3">
							 <label >Steering Column</label>
							 <input type="text" id="steerc" class="form-control mb-30" readonly>
							 </div>  		 
						 
						<div class="col-3">
							 <label >Turning Radius</label>
							 <input type="text" id="tradius" class="form-control mb-30" readonly>
						</div>         
					</div>
						</div>
							</div>
							</div>			  
							</div>


							<div class="panel-group" id="accordion">
									<div class="panel panel-default">
										<div class="panel-heading">
										<center> <h2 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Dimension & Capacity</a>
										</h2></center>
										</div>
										<div id="collapse4" class="panel-collapse collapse">
										<div class="panel-body">
								 <div class="row"> <!-- ROW STARTED-->
										 <div class="col-3">
											<label >Length</label>
											<input type="text" id="length" class="form-control mb-30" readonly>
											</div>  
										 <div class="col-3">
											<label >Width</label>
											<input type="text" id="width" class="form-control mb-30" readonly>
										 </div>  
										
										 <div class="col-3">
											<label >Height</label>
											<input type="text" id="height" class="form-control mb-30" readonly>
										 </div>  
										 <div class="col-3">
												<label >Wheelbase</label>
												<input type="text" id="wbase" class="form-control mb-30" readonly>
										 </div>        
								 </div>	
								 <div class="row"> <!-- ROW STARTED-->
								<div class="col-3">
									 <label >Ground Clearance</label>
									 <input type="text" id="ground" class="form-control mb-30" readonly>
									 </div>  		 
								 
								<div class="col-3">
									 <label >Kerb Weight</label>
									 <input type="text" id="kweight" class="form-control mb-30" readonly>
								</div>      
								<div class="col-3">
										<label >Cargo Volume</label>
										<input type="text" id="cvolume" class="form-control mb-30" readonly>
										</div>  		 
									
								 <div class="col-3">
										<label >Tyre Type</label>
										<input type="text" id="trtype" class="form-control mb-30" readonly>
								 </div>      
							</div>

							<div class="row"> <!-- ROW STARTED-->
								<div class="col-3">
									 <label >Tyre Size</label>
									 <input type="text" id="tsize" class="form-control mb-30" readonly>
									 </div>  		 
								 
								<div class="col-3">
									 <label >Seating Capacity</label>
									 <input type="text" id="seat" class="form-control mb-30" readonly>
								</div>      
								<div class="col-3">
										<label >No. of Doors</label>
										<input type="text" id="door" class="form-control mb-30" readonly>
										</div>  		 
									
								    
							</div>
								</div>
									</div>
									</div>			  
									</div>

									<div class="panel-group" id="accordion">
											<div class="panel panel-default">
												<div class="panel-heading">
												<center> <h2 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Comfort & Convenience</a>
												</h2></center>
												</div>
												<div id="collapse5" class="panel-collapse collapse">
												<div class="panel-body">
										 <div class="row"> <!-- ROW STARTED-->
												 <div class="col-3">
													<label >Power Steering</label>
													<input type="text" id="powerst" class="form-control mb-30" readonly>
													</div>  
												 <div class="col-3">
													<label >Front Power Window</label>
													<input type="text" id="powf" class="form-control mb-30" readonly>
												 </div>  
												
												 <div class="col-3">
													<label >Rear Power Window</label>
													<input type="text" id="powr" class="form-control mb-30" readonly>
												 </div>  
												 <div class="col-3">
														<label >Automatic Climate Contol</label>
														<input type="text" id="acctrl" class="form-control mb-30" readonly>
												 </div>        
										 </div>	
										 <div class="row"> <!-- ROW STARTED-->
										<div class="col-3">
											 <label >Remote Trunk Opener</label>
											 <input type="text" id="rto" class="form-control mb-30" readonly>
											 </div>  		 
										 
										<div class="col-3">
											 <label >Trunk Light</label>
											 <input type="text" id="tlight" class="form-control mb-30" readonly>
										</div>      
										<div class="col-3">
												<label >Rear Armrest</label>
												<input type="text" id="rar" class="form-control mb-30" readonly>
												</div>  		 
											
										 <div class="col-3">
												<label >Front Cupholder</label>
												<input type="text" id="fch" class="form-control mb-30" readonly>
										 </div>      
									</div>
		
									<div class="row"> <!-- ROW STARTED-->
										<div class="col-3">
											 <label >Rear AC Vents</label>
											 <input type="text" id="rac" class="form-control mb-30" readonly>
											 </div>  		 
										 
										<div class="col-3">
											 <label >Rear Seat Headrest</label>
											 <input type="text" id="rshr" class="form-control mb-30" readonly>
										</div>      
										<div class="col-3">
												<label >Rear Parking Sensor</label>
												<input type="text" id="rps" class="form-control mb-30" readonly>
												</div>  		 
										<div class="col-3">
												<label >Multi Function Steering Wheel</label>
												<input type="text" id="msteer" class="form-control mb-30" readonly>
												</div>  		 
										</div>

										<div class="row"> <!-- ROW STARTED-->
											<div class="col-3">
												 <label >Navigation</label>
												 <input type="text" id="navigation" class="form-control mb-30" readonly>
												 </div>  		 
											 
											<div class="col-3">
												 <label >Air Qualty Control</label>
												 <input type="text" id="aqc" class="form-control mb-30" readonly>
											</div>      
											<div class="col-3">
													<label >Remote Uel Lid Opener</label>
													<input type="text" id="rflo" class="form-control mb-30" readonly>
													</div>  		 
											<div class="col-3">
													<label >Cruise Control</label>
													<input type="text" id="cruise" class="form-control mb-30" readonly>
													</div>  		 
											</div>
											<div class="row"> <!-- ROW STARTED-->
									<div class="col-3">
										 <label >Engine Start & Stop Button</label>
										 <input type="text" id="ssbtn" class="form-control mb-30" readonly>
										 </div>  		 
									 
									<div class="col-3">
										 <label >Gear Shift Indicator</label>
										 <input type="text" id="gsi" class="form-control mb-30" readonly>
									</div>      
								</div>

										</div>
											</div>
											</div>			  
											</div>

											<div class="panel-group" id="accordion">
													<div class="panel panel-default">
														<div class="panel-heading">
														<center> <h2 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse">Interior Features</a>
														</h2></center>
														</div>
														<div id="collapse" class="panel-collapse collapse">
														<div class="panel-body">
												 <div class="row"> <!-- ROW STARTED-->
														 <div class="col-3">
															<label >AC</label>
															<input type="text" id="ac" class="form-control mb-30" readonly>
															</div>  
														 <div class="col-3">
															<label >Heater</label>
															<input type="text" id="heater" class="form-control mb-30" readonly>
														 </div>  
														
														 <div class="col-3">
															<label >Trip Meter</label>
															<input type="text" id="tmeter" class="form-control mb-30" readonly>
														 </div>  
														 <div class="col-3">
																<label >Clock</label>
																<input type="text" id="clock" class="form-control mb-30" readonly>
														 </div>        
												 </div>	
												 <div class="row"> <!-- ROW STARTED-->
												<div class="col-3">
													 <label >Electrically Adjustable Seat</label>
													 <input type="text" id="easeat" class="form-control mb-30" readonly>
													 </div>  		 
												 
												<div class="col-3">
													 <label >Dual Tone Dashboard</label>
													 <input type="text" id="dtd" class="form-control mb-30" readonly>
												</div>      
												<div class="col-3">
														<label >Tachometer</label>
														<input type="text" id="tameter" class="form-control mb-30" readonly>
														</div>  		 
													
												 <div class="col-3">
														<label >Leather Seat</label>
														<input type="text" id="lseat" class="form-control mb-30" readonly>
												 </div>      
											</div>
				
											<div class="row"> <!-- ROW STARTED-->
												<div class="col-3">
													 <label >Digital Odo Meter</label>
													 <input type="text" id="odo" class="form-control mb-30" readonly>
													 </div>  		 
												 
												<div class="col-3">
													 <label >Leather Steering Wheel</label>
													 <input type="text" id="lswheel" class="form-control mb-30" readonly>
												</div>      
											 		 
													
														
											</div>
												</div>
													</div>
													</div>			  
													</div>
				

				
					</form>

			</div>
		</div>
	<!--/section-->

			  <div class="row p-t-135">
				<div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="images/icons/map-icon.png" alt="IMG-ICON">
						</div>

						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Location
							</span>

							<span class="txt23 size38">
								AJCE Kanjirappally
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="images/icons/phone-icon.png" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Call Us
							</span>

							<span class="txt23 size38">
								(+91) 7561008226
							</span>
						</div>
					</div>
				</div>


			</div>
		</div>
	<!--/section-->



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
<!--===============================================================================================-->
	<script type="text/javascript" src="old/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="old/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="old/vendor/bootstrap/js/bootstrap.min.js"></script>
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

