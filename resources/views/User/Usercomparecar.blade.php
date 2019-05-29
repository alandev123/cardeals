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
		<script src="js/modelview.js"></script>
		<script src="js/modelview1.js"></script>
		<script src="js/varientview.js"></script>
		<script src="js/varientview1.js"></script>
		<script src="js/cardet.js"></script>
		<script src="js/cardet1.js"></script>
		
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
							<a href="mhome.php">
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
										<a href="/advice">Advices</a>
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

		<div class="container-fluid">
			<h3 class="tit7 t-center p-b-62 p-t-105">
				Select Car </h3>

	<!-- Booking -->
	<!--section class="section-booking bg1-pattern p-t-100 p-b-110"-->
		<div class="container-fluid row" >
			
				<div class="offset-md-1 col-lg-10 p-b-30">
				

					<form action="/results" class="wrap-form-booking" method="post" enctype="multipart/form-data">

												@csrf
												
                        <div class="row" style="margin-left:-10%; margin-right:-10%;">
													<div class="col-6">
													
														<div class="col-4" style="margin-left:-15px;">
				              										<label>Select Make</label>
				              	 <select name="companyname" id="companyname" class="form-control mb-30" style="height:40px;">
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
			 <br>
			 <br>
			 <div class="panel-group" id="accordion1">
					<div class="panel panel-default">
						<div class="panel-heading">
						<center> <h2 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion1" href="#collapse100" onclick="togl1()">Engine & Transmission</a>
						</h2></center>
						</div>
						<div id="collapse100" class="panel-collapse collapse">
						<div class="panel-body">
				 <div class="row"> <!-- ROW STARTED-->
						 <div class="col-4">
							<label >Displacement CC</label>
							<input type="text" id="cc" name="cc" class="form-control mb-30" readonly>
							</div>  
						 <div class="col-4">
							<label >Engine Description</label>
							<input type="text" id="endes" class="form-control mb-30" readonly>
						 </div>  
						
						 <div class="col-4">
							<label >Max Power</label>
							<input type="text" id="power" class="form-control mb-30" readonly>
						 </div>   
						      
                 </div>	
                 <div class="row"> <!-- ROW STARTED-->
                    <div class="col-4">
                            <label >Max Torque</label>
                            <input type="text" id="torque" class="form-control mb-30" readonly>
                            </div>
                   <div class="col-4">
                   <label >No. of Cylinder</label>
                   <input type="text" id="cylinder" class="form-control mb-30" readonly>
                 </div> 
                 <div class="col-4">
                        <label >Valves per Cylinder</label>
                        <input type="text" id="valves" class="form-control mb-30" readonly>
                   </div>    
                </div>

				 <div class="row"> <!-- ROW STARTED-->
					
				 
				 
				
				<div class="col-4">
						<label >Clutch Type</label>
						<input type="text" id="clutch" class="form-control mb-30" readonly>
				 </div>  
				 <div class="col-4">
						<label >Drive Type</label>
						<input type="text" id="dtype" class="form-control mb-30" readonly>
                        </div>  
                 <div class="col-4">
                     <label >Fuel Supply System</label>
                     <input type="text" id="fsupply" class="form-control mb-30" readonly>
                    </div>
		
			</div>
			 <div class="row"> <!-- ROW STARTED-->
			
				  
				 
				<div class="col-4">
					 <label >Transmission</label>
					 <input type="text" id="trans" class="form-control mb-30" readonly>
				</div>   
				<div class="col-4">
						<label >Gear</label>
						<input type="text" id="gear" class="form-control mb-30" readonly>
						</div>       
		</div>			   
		
		
					</div>
					</div>
					</div>			  
					</div>
			<div class="panel-group" id="accordion2">
					<div class="panel panel-default">
						<div class="panel-heading">
						<center> <h2 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion2" href="#collapse2" onclick="togl2()">Performance & Fuel</a>
						</h2></center>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">
				 <div class="row"> <!-- ROW STARTED-->
						 <div class="col-4">
							<label >Max Speed in KMPH</label>
							<input type="text" id="speed" class="form-control mb-30" readonly>
							</div>  
						 <div class="col-4">
							<label >Acceleration 0-100 in seconds</label>
							<input type="text" id="acce" class="form-control mb-30" readonly>
						 </div>  
						
						 <div class="col-4">
							<label >Braking 60-0 in seconds</label>
							<input type="text" id="braking" class="form-control mb-30" readonly>
						 </div>  
						        
				 </div>	
                 <div class="row"> <!-- ROW STARTED-->
                    
                    <div class="col-4">
                            <label >Fuel Type</label> 
                            <input type="text" id="fuel" name="fuel" class="form-control mb-30" readonly>
                     </div> 
				<div class="col-4">
					 <label >Mileage in KMPL</label>
					 <input type="text" id="milage" name="milage" class="form-control mb-30" readonly>
					 </div>  		 
				 
				<div class="col-4">
					 <label >Fuel Tank capacity in Litres</label>
					 <input type="text" id="tcapacity" class="form-control mb-30" readonly>
				</div>         
			</div>
				</div>
					</div>
					</div>			  
					</div>


					<div class="panel-group" id="accordion3">
							<div class="panel panel-default">
								<div class="panel-heading">
								<center> <h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion3" href="#collapse3" onclick="togl3()">Suspension & Steering</a>
								</h2></center>
								</div>
								<div id="collapse3" class="panel-collapse collapse">
								<div class="panel-body">
						 <div class="row"> <!-- ROW STARTED-->
								 <div class="col-4">
									<label >Front Suspension</label>
									<input type="text" id="fsus" class="form-control mb-30" readonly>
									</div>  
								 <div class="col-4">
									<label >Rear Suspension</label>
									<input type="text" id="rsus" class="form-control mb-30" readonly>
								 </div>  
								
								 <div class="col-4">
									<label >Shock Absorber Type</label>
									<input type="text" id="shock" class="form-control mb-30" readonly>
                                 </div>  
                                 
							 </div>        
						 </div>	
                         <div class="row"> <!-- ROW STARTED-->
                            <div class="col-4">
                                    <label >Steering Type</label>
                                    <input type="text" id="steert" class="form-control mb-30" readonly>
                             </div>
                            
						<div class="col-4">
							 <label >Steering Column</label>
							 <input type="text" id="steerc" class="form-control mb-30" readonly>
							 </div>  		 
						 
						<div class="col-4">
							 <label >Turning Radius in Meter</label>
							 <input type="text" id="tradius" class="form-control mb-30" readonly>
						</div>         
					
						</div>
							</div>
							</div>			  
							</div>


							<div class="panel-group" id="accordion4">
									<div class="panel panel-default">
										<div class="panel-heading">
										<center> <h2 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion4" href="#collapse4" onclick="togl4()">Dimension & Capacity</a>
										</h2></center> 
										</div>
										<div id="collapse4" class="panel-collapse collapse">
										<div class="panel-body">
								 <div class="row"> <!-- ROW STARTED-->
										 <div class="col-4">
											<label >Length in MM</label>
											<input type="text" id="length" name="length" class="form-control mb-30" readonly>
											</div>  
										 <div class="col-4">
											<label >Width in MM</label>
											<input type="text" id="width" name="width" class="form-control mb-30" readonly>
										 </div>  
										
										 <div class="col-4">
											<label >Height in MM</label>
											<input type="text" id="height" name="height" class="form-control mb-30" readonly>
										 </div>  
										     
                                 </div>	
                                 <div class="row"> <!-- ROW STARTED-->
                                    <div class="col-4">
                                            <label >Wheelbase in MM</label>
                                            <input type="text" id="wbase" name="wbase" class="form-control mb-30" readonly>
                                     </div>   
                                     <div class="col-4">
                                            <label >Ground Clearance in MM</label>
                                            <input type="text" id="ground" name="ground" class="form-control mb-30" readonly>
                                            </div>  		 
                                        
                                       <div class="col-4">
                                            <label >Kerb Weight in Kg</label>
                                            <input type="text" id="kweight" class="form-control mb-30" readonly>
                                       </div>  

                                 </div>
                                 <div class="row"> <!-- ROW STARTED-->
                                    
								    
								<div class="col-4">
										<label >Cargo Volume in Litre</label>
										<input type="text" id="cvolume" class="form-control mb-30" readonly>
										</div>  		 
									
								 <div class="col-4">
										<label >Tyre Type</label>
										<input type="text" id="trtype" class="form-control mb-30" readonly>
                                 </div>  
                                 <div class="col-4">
                                        <label >Tyre Size</label>
                                        <input type="text" id="tsize" class="form-control mb-30" readonly>
                                        </div>  	    
							</div>

							<div class="row"> <!-- ROW STARTED-->
									 
								 
								<div class="col-4">
									 <label >Seating Capacity</label>
									 <input type="text" id="seat" class="form-control mb-30" readonly>
								</div>      
								<div class="col-4">
										<label >No. of Doors</label>
										<input type="text" id="door" class="form-control mb-30" readonly>
										</div>  		 
									
								    
							</div>
								</div>
									</div>
									</div>			  
									</div>

									<div class="panel-group" id="accordion5">
											<div class="panel panel-default">
												<div class="panel-heading">
												<center> <h2 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion5" href="#collapse5" onclick="togl5()">Comfort & Convenience</a>
												</h2></center>
												</div>
												<div id="collapse5" class="panel-collapse collapse">
												<div class="panel-body">
										 <div class="row"> <!-- ROW STARTED-->
												 <div class="col-4">
													<label >Power Steering</label>
													<input type="text" id="powerst" class="form-control mb-30" readonly>
													</div>  
												 <div class="col-4">
													<label >Front Power Window</label>
													<input type="text" id="powf" class="form-control mb-30" readonly>
												 </div>  
												
												 <div class="col-4">
													<label >Rear Power Window</label>
													<input type="text" id="powr" class="form-control mb-30" readonly>
												 </div>  
												         
										 </div>	
										 <div class="row"> <!-- ROW STARTED-->
											<div class="col-4">
												<label >Automatic Climate Contol</label>
												<input type="text" id="acctrl" class="form-control mb-30" readonly>
										 </div>
										<div class="col-4">
											 <label >Remote Trunk Opener</label>
											 <input type="text" id="rto" class="form-control mb-30" readonly>
											 </div>  		 
										 
										<div class="col-4">
											 <label >Trunk Light</label>
											 <input type="text" id="tlight" class="form-control mb-30" readonly>
										</div>      
										      
									</div>
		
									<div class="row"> <!-- ROW STARTED-->
										<div class="col-4">
											<label >Rear Armrest</label>
											<input type="text" id="rar" class="form-control mb-30" readonly>
											</div>  		 
										
									 <div class="col-4">
											<label >Front Cupholder</label>
											<input type="text" id="fch" class="form-control mb-30" readonly>
									 </div>
										<div class="col-4">
											 <label >Rear AC Vents</label>
											 <input type="text" id="rac" class="form-control mb-30" readonly>
											 </div> 
									</div> 		 
											 <div class="row">
										<div class="col-4">
											 <label >Rear Seat Headrest</label>
											 <input type="text" id="rshr" class="form-control mb-30" readonly>
										</div>      
										<div class="col-4">
												<label >Rear Parking Sensor</label>
												<input type="text" id="rps" class="form-control mb-30" readonly>
												</div>  		 
										<div class="col-4">
												<label >Multi Function Steering Wheel</label>
												<input type="text" id="msteer" class="form-control mb-30" readonly>
												</div>  		 
										</div>

										<div class="row"> <!-- ROW STARTED-->
											<div class="col-4">
												 <label >Navigation</label>
												 <input type="text" id="navigation" class="form-control mb-30" readonly>
												 </div>  		 
											 
											<div class="col-4">
												 <label >Air Qualty Control</label>
												 <input type="text" id="aqc" class="form-control mb-30" readonly>
											</div>      
											<div class="col-4">
													<label >Remote Uel Lid Opener</label>
													<input type="text" id="rflo" class="form-control mb-30" readonly>
													</div>  		 
										 		 
											</div>
											<div class="row"> <!-- ROW STARTED-->
												<div class="col-4">
													<label >Cruise Control</label>
													<input type="text" id="cruise" class="form-control mb-30" readonly>
													</div> 
									<div class="col-4">
										 <label >Engine Start & Stop Button</label>
										 <input type="text" id="ssbtn" class="form-control mb-30" readonly>
										 </div>  		 
									 
									<div class="col-4">
										 <label >Gear Shift Indicator</label>
										 <input type="text" id="gsi" class="form-control mb-30" readonly>
									</div>      
								</div>

										</div>
											</div>
											</div>			  
											</div>

											<div class="panel-group" id="accordion6">
													<div class="panel panel-default">
														<div class="panel-heading">
														<center> <h2 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion6" href="#collapse" onclick="togl6()">Interior Features</a>
														</h2></center>
														</div>
														<div id="collapse" class="panel-collapse collapse">
														<div class="panel-body">
												 <div class="row"> <!-- ROW STARTED-->
														 <div class="col-4">
															<label >AC</label>
															<input type="text" id="ac" class="form-control mb-30" readonly>
															</div>  
														 <div class="col-4">
															<label >Heater</label>
															<input type="text" id="heater" class="form-control mb-30" readonly>
														 </div>  
														
														 <div class="col-4">
															<label >Trip Meter</label>
															<input type="text" id="tmeter" class="form-control mb-30" readonly>
														 </div>  
														         
												 </div>	
												 <div class="row"> <!-- ROW STARTED-->
													<div class="col-4">
														<label >Clock</label>
														<input type="text" id="clock" class="form-control mb-30" readonly>
												 </div>
												<div class="col-4">
													 <label >Electrically Adjustable Seat</label>
													 <input type="text" id="easeat" class="form-control mb-30" readonly>
													 </div>  		 
												 
												<div class="col-4">
													 <label >Dual Tone Dashboard</label>
													 <input type="text" id="dtd" class="form-control mb-30" readonly>
												</div>      
												    
											</div>
				
											<div class="row"> <!-- ROW STARTED-->
												<div class="col-4">
													<label >Tachometer</label>
													<input type="text" id="tameter" class="form-control mb-30" readonly>
													</div>  		 
												
											 <div class="col-4">
													<label >Leather Seat</label>
													<input type="text" id="lseat" class="form-control mb-30" readonly>
											 </div>  
												<div class="col-4">
													 <label >Digital Odo Meter</label>
													 <input type="text" id="odo" class="form-control mb-30" readonly>
													 </div>  		 
												 
												<div class="col-4">
													 <label >Leather Steering Wheel</label>
													 <input type="text" id="lswheel" class="form-control mb-30" readonly>
												</div>      
											 		 
													
														
											</div>
												</div>
													</div>
													</div>	
													
										</div>	
										<div class="panel-group" id="accordion50">
											<div class="panel panel-default">
												<div class="panel-heading">
												<center> <h2 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion50" href="#collapse50" onclick="togl7()">Exterior Features</a>
												</h2></center>
												</div>
												<div id="collapse50" class="panel-collapse collapse">
												<div class="panel-body">
										 <div class="row"> <!-- ROW STARTED-->
												 <div class="col-4">
													<label >Adjustable Headlamp</label>
													<input type="text" id="ahlamp" class="form-control mb-30" readonly>
													</div>  
												 <div class="col-4">
													<label >Front Fog Lamp</label>
													<input type="text" id="ffog" class="form-control mb-30" readonly>
												 </div>  
												
												 <div class="col-4">
													<label >Rear Fog Lamp</label>
													<input type="text" id="rfog" class="form-control mb-30" readonly>
												 </div>  
																 
										 </div>	
										 <div class="row"> <!-- ROW STARTED-->
											<div class="col-4">
												<label >Rear Window Wiper</label>
												<input type="text" id="rww" class="form-control mb-30" readonly>
										 </div>
										<div class="col-4">
											 <label >Alloy Wheel</label>
											 <input type="text" id="awheel" class="form-control mb-30" readonly>
											 </div>  		 
										 
										<div class="col-4">
											 <label >Sun Roof</label>
											 <input type="text" id="sroof" class="form-control mb-30" readonly>
										</div>      
												
									</div>
		
									<div class="row"> <!-- ROW STARTED-->
										<div class="col-4">
											<label >Roof Rail</label>
											<input type="text" id="rrail" class="form-control mb-30" readonly>
											</div>  		 
										
									 <div class="col-4">
											<label >Power Adjustable ORVM</label>
											<input type="text" id="orvm" class="form-control mb-30" readonly>
									 </div>  
										<div class="col-4">
											 <label >Rain Sensing Wiper</label>
											 <input type="text" id="rsw" class="form-control mb-30" readonly>
											 </div>  		 
										 
										   
												
									</div>
									<div class="row"> <!-- ROW STARTED-->
										<div class="col-4">
											 <label >Rear Window Washer</label>
											 <input type="text" id="rwash" class="form-control mb-30" readonly>
										</div>   
										<div class="col-4">
											<label >Wheel Cover</label>
											<input type="text" id="wcover" class="form-control mb-30" readonly>
											</div>  		 
										
									 <div class="col-4">
											<label >Rear Spoiler</label>
											<input type="text" id="spoiler" class="form-control mb-30" readonly>
									 </div>  
										<div class="col-4">
											 <label >Roof Carrier</label>
											 <input type="text" id="carrier" class="form-control mb-30" readonly>
											 </div>  		 
										 
										<div class="col-4">
											 <label >Rearview Mirror Indicator</label>
											 <input type="text" id="rmi" class="form-control mb-30" readonly>
										</div>      
										<div class="col-4">
											<label >Chrome Grill</label>
											<input type="text" id="cgrill" class="form-control mb-30" readonly>
									 </div> 		
									</div>
									


										</div>
											</div>
											</div>	
											
								</div>	

								<div class="panel-group" id="accordion51">
									<div class="panel panel-default">
										<div class="panel-heading">
										<center> <h2 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion51" href="#collapse51" onclick="togl8()">Safety Features</a>
										</h2></center>
										</div>
										<div id="collapse51" class="panel-collapse collapse">
										<div class="panel-body">
								 <div class="row"> <!-- ROW STARTED-->
										 <div class="col-4">
											<label >ABS</label>
											<input type="text" id="abs" class="form-control mb-30" readonly>
											</div>  
										 <div class="col-4">
											<label >EBD</label>
											<input type="text" id="ebd" class="form-control mb-30" readonly>
										 </div>  
										
										 <div class="col-4">
											<label >Central Lock</label>
											<input type="text" id="cenlock" class="form-control mb-30" readonly>
										 </div>  
														 
								 </div>	
								 <div class="row"> <!-- ROW STARTED-->
									<div class="col-4">
										<label >Parking Senser</label>
										<input type="text" id="psense" class="form-control mb-30" readonly>
								 </div>
								<div class="col-4">
									 <label >Auto Door Lock</label>
									 <input type="text" id="adlock" class="form-control mb-30" readonly>
									 </div>  		 
								 
								<div class="col-4">
									 <label >Brake Assist</label>
									 <input type="text" id="bassist" class="form-control mb-30" readonly>
								</div>      
										
							</div>

							<div class="row"> <!-- ROW STARTED-->
								<div class="col-4">
									<label >Child Safety Lock</label>
									<input type="text" id="cslock" class="form-control mb-30" readonly>
									</div>  		 
								
							 <div class="col-4">
									<label >Passenger Airbag</label>
									<input type="text" id="pabag" class="form-control mb-30" readonly>
							 </div>  
								<div class="col-4">
									 <label >Rear Side Airbag</label>
									 <input type="text" id="rsabag" class="form-control mb-30" readonly>
									 </div>  		 
								 
									 
										
							</div>
							<div class="row"> <!-- ROW STARTED-->
								<div class="col-4">
									 <label >Driver Airbag</label>
									 <input type="text" id="dabag" class="form-control mb-30" readonly>
								</div>   
								<div class="col-4">
									<label >Front Side Airbag</label>
									<input type="text" id="fsabag" class="form-control mb-30" readonly>
									</div>  		 
								
							 <div class="col-4">
									<label >Day Night ORVM</label>
									<input type="text" id="dnrvm" class="form-control mb-30" readonly>
							 </div>   		 
							</div>
							<div class="row">
								<div class="col-4">
									 <label >Adjustable Seat</label>
									 <input type="text" id="adseat" class="form-control mb-30" readonly>
								</div>      
								<div class="col-4">
									<label >Door AjarWarning</label>
									<input type="text" id="dawarn" class="form-control mb-30" readonly>
							 </div> 	
							 <div class="col-4">
								<label >Keyless Entry</label>
								<input type="text" id="klentry" class="form-control mb-30" readonly>
								</div>  	
							</div>
							
							<div class="row"> <!-- ROW STARTED-->
								<div class="col-4">
									 <label >StabilityControl System</label>
									 <input type="text" id="scsys" class="form-control mb-30" readonly>
								</div>   
								<div class="col-4">
									<label >Hill Assist</label>
									<input type="text" id="hass" class="form-control mb-30" readonly>
									</div>  		 
								
							 <div class="col-4">
									<label >Rear Camera</label>
									<input type="text" id="rcam" class="form-control mb-30" readonly>
							 </div>  
								 		 
							</div>
							<div class="row">
								<div class="col-4">
									 <label >Impact Sensing Auto Door Unlock</label>
									 <input type="text" id="adu" class="form-control mb-30" readonly>
								</div>      
								<div class="col-4">
									<label >Power Door Lock</label>
									<input type="text" id="pdl" class="form-control mb-30" readonly>
							 </div> 	
							 <div class="col-4">
								<label >Anti Theft Alarm</label>
								<input type="text" id="alarm" class="form-control mb-30" readonly>
								</div>  	
							</div>
							<div class="row">
								<div class="col-4">
									 <label >Traction Control</label>
									 <input type="text" id="tctrl" class="form-control mb-30" readonly>
								</div>      
								<div class="col-4">
									<label >Engine Immobilizer</label>
									<input type="text" id="ei" class="form-control mb-30" readonly>
							 </div> 	
							 <div class="col-4">
								<label >Engine Check Warning</label>
								<input type="text" id="ecwarn" class="form-control mb-30" readonly>
								</div>  
								<div class="col-4">
									<label >Follow me Home Lamp</label>
									<input type="text" id="fhlamp" class="form-control mb-30" readonly>
									</div> 	
									<div class="col-4">
								<label >Seatbelt warning</label>
								<input type="text" id="sbwarn" class="form-control mb-30" readonly>
								</div> 
								<div class="col-4">
										<label >Anti Theft Device</label>
										<input type="text" id="atdev" class="form-control mb-30" readonly>
										</div> 
							</div>

								</div>
									</div>
									</div>	
									
						</div>
						

						<div class="panel-group" id="accordion52">
							<div class="panel panel-default">
								<div class="panel-heading">
								<center> <h2 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion52" href="#collapse52" onclick="togl9()">Entertainment Features</a>
								</h2></center>
								</div>
								<div id="collapse52" class="panel-collapse collapse">
								<div class="panel-body">
						 <div class="row"> <!-- ROW STARTED-->
								 <div class="col-4">
									<label >CD/DVD</label>
									<input type="text" id="cd" class="form-control mb-30" readonly>
									</div>  
								 <div class="col-4">
									<label >Radio</label>
									<input type="text" id="radio" class="form-control mb-30" readonly>
								 </div>  
								
								 <div class="col-4">
									<label >Front Speaker</label>
									<input type="text" id="speaker" class="form-control mb-30" readonly>
								 </div>  
												 
						 </div>	
						 <div class="row"> <!-- ROW STARTED-->
							<div class="col-4">
								<label >USB/AUX</label>
								<input type="text" id="usb" class="form-control mb-30" readonly>
						 </div>
						<div class="col-4">
							 <label >Bluetooth</label>
							 <input type="text" id="bt" class="form-control mb-30" readonly>
							 </div>  		 
						 
						<div class="col-4">
							 <label >Rear Speaker</label>
							 <input type="text" id="rspeaker" class="form-control mb-30" readonly>
						</div>      
								
					</div>

						</div>
							</div>
							</div>	
							
				</div>	



									</div>


									<!--
									
									
									
									
									
									//here the end of first Car
									
									
									
									
									
									
									-->
									
										<div class="col-6">
												
											
												<div class="col-4" style="margin-left:-15px;">
																			<label>Select Make</label>
										 <select name="companyname1" id="companyname1" class="form-control mb-30" style="height:40px;" required>
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
										<select name="modelname1" id="modelname1" class="form-control mb-30" style="height:40px;" onchange="modeldet(this.value)" required>
												<option disabled="disabled" selected="selected">Select</option>
												
										 </select>
											</div>
											<div class="col-4">
												 <label>Select Varient</label>
												 <select name="varient1" id="varient1" class="form-control mb-30" style="height:40px;" onchange="cardets1(this.value)" required>
														<option disabled="disabled" selected="selected">Select</option>
												 </select>
										 </div>
			 </div>
			 <br/>
			 
			<h2>Core Features</h2>
			<div class="row"> 
				 <div class="col-4">
					 <label >Type</label>
					 <input type="text" id="cartypec1" name="cartypec1" class="form-control mb-30" readonly>
				</div>  
		
				<div class="col-4">
					<label >Displacement CC</label>
					<input type="text" id="ccc1" class="form-control mb-30" readonly>
				 </div>  
				 
						 
				 <div class="col-3" id="img1" > 

				</div> 
					
												
		</div><!--  row end div  -->
		<div class="row"> 
				
	 
			 <div class="col-4">
				 <label >Max Power</label>
				 <input type="text" id="powerc1" class="form-control mb-30" readonly>
				</div>  
				<div class="col-4">
				 <label >Mileage in KMPL</label>
				 <input type="text" id="milagec1" class="form-control mb-30" readonly>
				</div>      
				
			 
								 
	 </div><!--  row end div  -->
	 <div class="row"> 
			<div class="col-4">
		<label >Ex Shpwroom Price In Lakh</label>
		<input type="text" id="price1" class="form-control mb-30" readonly>
	 </div>
	 
			 
		 <div class="col-4">
			 <label >Transmission</label>
			 <input type="text" id="transc1" class="form-control mb-30" readonly>
			</div>   
		
							
</div><!--  row end div  -->
	 <br>
	 <br>
	 <div class="panel-group" id="accordion20">
			<div class="panel panel-default">
				<div class="panel-heading">
				<center> <h2 class="panel-title">
					<a data-toggle="" data-parent="#accordion20" href="#collapse11" onclick="togl10()">Engine & Transmission</a>
				</h2></center>
				</div>
				<div id="collapse11" class="panel-collapse collapse">
				<div class="panel-body">
		 <div class="row"> <!-- ROW STARTED-->
				 <div class="col-4">
					<label >Displacement CC</label>
					<input type="text" id="cc1" class="form-control mb-30" readonly>
					</div>  
				 <div class="col-4">
					<label >Engine Description</label>
					<input type="text" id="endes1" class="form-control mb-30" readonly>
				 </div>  
				
				 <div class="col-4">
					<label >Max Power</label>
					<input type="text" id="power1" class="form-control mb-30" readonly>
				 </div>   
				    
		 </div>	
		 <div class="row"> <!-- ROW STARTED-->
			<div class="col-4">
				<label >Max Torque</label>
				<input type="text" id="torque1" class="form-control mb-30" readonly>
				</div>  
		<div class="col-4">
			 <label >No. of Cylinder</label>
			 <input type="text" id="cylinder1" class="form-control mb-30" readonly>
		</div>  
		 
		<div class="col-4">
			 <label >Valves per Cylinder</label>
			 <input type="text" id="valves1" class="form-control mb-30" readonly>
		</div>  
		

	</div>
	 <div class="row"> <!-- ROW STARTED-->
		<div class="col-4">
			<label >Clutch Type</label>
			<input type="text" id="clutch1" class="form-control mb-30" readonly>
	 </div>  
	 <div class="col-4">
			<label >Drive Type</label>
			<input type="text" id="dtype1" class="form-control mb-30" readonly>
			</div>  
		<div class="col-4">
			 <label >Fuel Supply System</label>
			 <input type="text" id="fsupply1" class="form-control mb-30" readonly>
		</div>  
	</div>
		<div class="row">
		<div class="col-4">
			 <label >Transmission</label>
			 <input type="text" id="trans1" class="form-control mb-30" readonly>
		</div>   
		<div class="col-4">
				<label >Gear</label>
				<input type="text" id="gear1" class="form-control mb-30" readonly>
				</div>       
</div>			   


			</div>
			</div>
			</div>			  
			</div>
	<div class="panel-group" id="accordion21">
			<div class="panel panel-default">
				<div class="panel-heading">
				<center> <h2 class="panel-title">
					<a data-toggle="" data-parent="#accordion21" href="#collapse12" onclick="togl11()">Performance & Fuel</a>
				</h2></center>
				</div>
				<div id="collapse12" class="panel-collapse collapse">
				<div class="panel-body">
		 <div class="row"> <!-- ROW STARTED-->
				 <div class="col-4">
					<label >Max Speed in KMPH</label>
					<input type="text" id="speed1" class="form-control mb-30" readonly>
					</div>  
				 <div class="col-4">
					<label >Acceleration 0-100 in seconds</label>
					<input type="text" id="acce1" class="form-control mb-30" readonly>
				 </div>  
				
				 <div class="col-4">
					<label >Braking 60-0 in seconds</label>
					<input type="text" id="braking1" name="braking1" class="form-control mb-30" readonly>
				 </div>  
				       
		 </div>	
		 <div class="row"> <!-- ROW STARTED-->
			<div class="col-4">
				<label >Fuel Type</label>
				<input type="text" id="fuel1" name="fuel1" class="form-control mb-30" readonly>
		 </div>  
		<div class="col-4">
			 <label >Mileage in KMPL</label>
			 <input type="text" id="milage1" name="milage1" class="form-control mb-30" readonly>
			 </div>  		 
		 
		<div class="col-4">
			 <label >Fuel Tank capacity in Litres</label>
			 <input type="text" id="tcapacity1" class="form-control mb-30" readonly>
		</div>         
	</div>
		</div>
			</div>
			</div>			  
			</div>


			<div class="panel-group" id="accordion22">
					<div class="panel panel-default">
						<div class="panel-heading">
						<center> <h2 class="panel-title">
							<a data-toggle="" data-parent="#accordion22" href="#collapse13" onclick="togl12()">Suspension & Steering</a>
						</h2></center>
						</div>
						<div id="collapse13" class="panel-collapse collapse">
						<div class="panel-body">
				 <div class="row"> <!-- ROW STARTED-->
						 <div class="col-4">
							<label >Front Suspension</label>
							<input type="text" id="fsus1" class="form-control mb-30" readonly>
							</div>  
						 <div class="col-4">
							<label >Rear Suspension</label>
							<input type="text" id="rsus1" class="form-control mb-30" readonly>
						 </div>  
						
						 <div class="col-4">
							<label >Shock Absorber Type</label>
							<input type="text" id="shock1" class="form-control mb-30" readonly>
						 </div>  
						         
				 </div>	
				 <div class="row"> <!-- ROW STARTED-->
					<div class="col-4">
						<label >Steering Type</label>
						<input type="text" id="steert1" class="form-control mb-30" readonly>
				 </div>
				<div class="col-4">
					 <label >Steering Column</label>
					 <input type="text" id="steerc1" class="form-control mb-30" readonly>
					 </div>  		 
				 
				<div class="col-4">
					 <label >Turning Radius in Meter</label>
					 <input type="text" id="tradius1" class="form-control mb-30" readonly>
				</div>         
			</div>
				</div>
					</div>
					</div>			  
					</div>


					<div class="panel-group" id="accordion23">
							<div class="panel panel-default">
								<div class="panel-heading">
								<center> <h2 class="panel-title">
									<a data-toggle="" data-parent="#accordion23" href="#collapse14" onclick="togl13()">Dimension & Capacity</a>
								</h2></center>
								</div>
								<div id="collapse14" class="panel-collapse collapse">
								<div class="panel-body">
						 <div class="row"> <!-- ROW STARTED-->
								 <div class="col-4">
									<label >Lengt in MMh</label>
									<input type="text" id="length1" name="length1" class="form-control mb-30" readonly>
									</div>  
								 <div class="col-4">
									<label >Width in MM</label>
									<input type="text" id="width1" name="width1" class="form-control mb-30" readonly>
								 </div>  
								
								 <div class="col-4">
									<label >Height in MM</label>
									<input type="text" id="height1" name="height1" class="form-control mb-30" readonly>
								 </div>  
								        
						 </div>	
						 <div class="row"> <!-- ROW STARTED-->
							<div class="col-4">
								<label >Wheelbase in MM</label>
								<input type="text" id="wbase1" name="wbase1" class="form-control mb-30" readonly>
						 </div> 
						<div class="col-4">
							 <label >Ground Clearance in MM</label>
							 <input type="text" id="ground1" name ="ground1" class="form-control mb-30" readonly>
							 </div>  		 
						 
						<div class="col-4">
							 <label >Kerb Weight in Kg</label>
							 <input type="text" id="kweight1" class="form-control mb-30" readonly>
						</div>      
						     
					</div>

					<div class="row"> <!-- ROW STARTED-->
						<div class="col-4">
							<label >Cargo Volume in Litre</label>
							<input type="text" id="cvolume1" class="form-control mb-30" readonly>
							</div>  		 
						
					 <div class="col-4">
							<label >Tyre Type</label>
							<input type="text" id="trtype1" class="form-control mb-30" readonly>
					 </div> 
						<div class="col-4">
							 <label >Tyre Size</label>
							 <input type="text" id="tsize1" class="form-control mb-30" readonly>
							 </div>  		 
					</div>
					<div class="row">
						<div class="col-4">
							 <label >Seating Capacity</label>
							 <input type="text" id="seat1" class="form-control mb-30" readonly>
						</div>      
						<div class="col-4">
								<label >No. of Doors</label>
								<input type="text" id="door1" class="form-control mb-30" readonly>
								</div>  		 
							
								
					</div>
						</div>
							</div>
							</div>			  
							</div>

							<div class="panel-group" id="accordion24">
									<div class="panel panel-default">
										<div class="panel-heading">
										<center> <h2 class="panel-title">
											<a data-toggle="" data-parent="#accordion24" href="#collapse15" onclick="togl14()">Comfort & Convenience</a>
										</h2></center>
										</div>
										<div id="collapse15" class="panel-collapse collapse">
										<div class="panel-body">
								 <div class="row"> <!-- ROW STARTED-->
										 <div class="col-4">
											<label >Power Steering</label>
											<input type="text" id="powerst1" class="form-control mb-30" readonly>
											</div>  
										 <div class="col-4">
											<label >Front Power Window</label>
											<input type="text" id="powf1" class="form-control mb-30" readonly>
										 </div>  
										
										 <div class="col-4">
											<label >Rear Power Window</label>
											<input type="text" id="powr1" class="form-control mb-30" readonly>
										 </div>  
										         
								 </div>	
								 <div class="row"> <!-- ROW STARTED-->
									<div class="col-4">
										<label >Automatic Climate Contol</label>
										<input type="text" id="acctrl1" class="form-control mb-30" readonly>
								 </div>
								<div class="col-4">
									 <label >Remote Trunk Opener</label>
									 <input type="text" id="rto1" class="form-control mb-30" readonly>
									 </div>  		 
								 
								<div class="col-4">
									 <label >Trunk Light</label>
									 <input type="text" id="tlight1" class="form-control mb-30" readonly>
								</div>      
								     
							</div>

							<div class="row"> <!-- ROW STARTED-->
								<div class="col-4">
									<label >Rear Armrest</label>
									<input type="text" id="rar1" class="form-control mb-30" readonly>
									</div>  		 
								
							 <div class="col-4">
									<label >Front Cupholder</label>
									<input type="text" id="fch1" class="form-control mb-30" readonly>
							 </div> 
								<div class="col-4">
									 <label >Rear AC Vents</label>
									 <input type="text" id="rac1" class="form-control mb-30" readonly>
									 </div>  		 
							</div>
							<div class="row">
								<div class="col-4">
									 <label >Rear Seat Headrest</label>
									 <input type="text" id="rshr1" class="form-control mb-30" readonly>
								</div>      
								<div class="col-4">
										<label >Rear Parking Sensor</label>
										<input type="text" id="rps1" class="form-control mb-30" readonly>
										</div>  		 
								<div class="col-4">
										<label >Multi Function Steering Wheel</label>
										<input type="text" id="msteer1" class="form-control mb-30" readonly>
										</div>  		 
								</div>

								<div class="row"> <!-- ROW STARTED-->
									<div class="col-4">
										 <label >Navigation</label>
										 <input type="text" id="navigation1" class="form-control mb-30" readonly>
										 </div>  		 
									 
									<div class="col-4">
										 <label >Air Qualty Control</label>
										 <input type="text" id="aqc1" class="form-control mb-30" readonly>
									</div>      
									<div class="col-4">
											<label >Remote Uel Lid Opener</label>
											<input type="text" id="rflo1" class="form-control mb-30" readonly>
											</div>  		 
									 		 
									</div>
									<div class="row"> <!-- ROW STARTED-->
										<div class="col-4">
											<label >Cruise Control</label>
											<input type="text" id="cruise1" class="form-control mb-30" readonly>
											</div> 
							<div class="col-4">
								 <label >Engine Start & Stop Button</label>
								 <input type="text" id="ssbtn1" class="form-control mb-30" readonly>
								 </div>  		 
							 
							<div class="col-4">
								 <label >Gear Shift Indicator</label>
								 <input type="text" id="gsi1" class="form-control mb-30" readonly>
							</div>      
						</div>

								</div>
									</div>
									</div>			  
									</div>

									<div class="panel-group" id="accordion25">
											<div class="panel panel-default">
												<div class="panel-heading">
												<center> <h2 class="panel-title">
													<a data-toggle="" data-parent="#accordion25" href="#collapse16" onclick="togl15()">Interior Features</a>
												</h2></center>
												</div>
												<div id="collapse16" class="panel-collapse collapse">
												<div class="panel-body">
										 <div class="row"> <!-- ROW STARTED-->
												 <div class="col-4">
													<label >AC</label>
													<input type="text" id="ac1" class="form-control mb-30" readonly>
													</div>  
												 <div class="col-4">
													<label >Heater</label>
													<input type="text" id="heater1" class="form-control mb-30" readonly>
												 </div>  
												
												 <div class="col-4">
													<label >Trip Meter</label>
													<input type="text" id="tmeter1" class="form-control mb-30" readonly>
												 </div>  
												        
										 </div>	
										 <div class="row"> <!-- ROW STARTED-->
											<div class="col-4">
												<label >Clock</label>
												<input type="text" id="clock1" class="form-control mb-30" readonly>
										 </div> 
										<div class="col-4">
											 <label >Electrically Adjustable Seat</label>
											 <input type="text" id="easeat1" class="form-control mb-30" readonly>
											 </div>  		 
										 
										<div class="col-4">
											 <label >Dual Tone Dashboard</label>
											 <input type="text" id="dtd1" class="form-control mb-30" readonly>
										</div>      
									     
									</div>
		
									<div class="row"> <!-- ROW STARTED-->
										<div class="col-4">
											<label >Tachometer</label>
											<input type="text" id="tameter1" class="form-control mb-30" readonly>
											</div>  		 
										
									 <div class="col-4">
											<label >Leather Seat</label>
											<input type="text" id="lseat1" class="form-control mb-30" readonly>
									 </div> 
										<div class="col-4">
											 <label >Digital Odo Meter</label>
											 <input type="text" id="odo1" class="form-control mb-30" readonly>
											 </div>  		 
										 </div>
										 <div class="row">
										<div class="col-4">
											 <label >Leather Steering Wheel</label>
											 <input type="text" id="lswheel1" class="form-control mb-30" readonly>
										</div>      
												
											
												
									</div>
										</div>
											</div>
											</div>	
											
								</div>
								
								



								<div class="panel-group" id="accordion60">
									<div class="panel panel-default">
										<div class="panel-heading">
										<center> <h2 class="panel-title">
											<a data-toggle="" data-parent="#accordion60" href="#collapse60" onclick="togl16()">Exterior Features</a>
										</h2></center>
										</div>
										<div id="collapse60" class="panel-collapse collapse">
										<div class="panel-body">
								 <div class="row"> <!-- ROW STARTED-->
										 <div class="col-4">
											<label >Adjustable Headlamp</label>
											<input type="text" id="ahlamp1" class="form-control mb-30" readonly>
											</div>  
										 <div class="col-4">
											<label >Front Fog Lamp</label>
											<input type="text" id="ffog1" class="form-control mb-30" readonly>
										 </div>  
										
										 <div class="col-4">
											<label >Rear Fog Lamp</label>
											<input type="text" id="rfog1" class="form-control mb-30" readonly>
										 </div>  
														 
								 </div>	
								 <div class="row"> <!-- ROW STARTED-->
									<div class="col-4">
										<label >Rear Window Wiper</label>
										<input type="text" id="rww1" class="form-control mb-30" readonly>
								 </div>
								<div class="col-4">
									 <label >Alloy Wheel</label>
									 <input type="text" id="awheel1" class="form-control mb-30" readonly>
									 </div>  		 
								 
								<div class="col-4">
									 <label >Sun Roof</label>
									 <input type="text" id="sroof1" class="form-control mb-30" readonly>
								</div>      
										
							</div>

							<div class="row"> <!-- ROW STARTED-->
								<div class="col-4">
									<label >Roof Rail</label>
									<input type="text" id="rrail1" class="form-control mb-30" readonly>
									</div>  		 
								
							 <div class="col-4">
									<label >Power Adjustable ORVM</label>
									<input type="text" id="orvm1" class="form-control mb-30" readonly>
							 </div>  
								<div class="col-4">
									 <label >Rain Sensing Wiper</label>
									 <input type="text" id="rsw1" class="form-control mb-30" readonly>
									 </div>  		 
								 
									 
										
							</div>
							<div class="row"> <!-- ROW STARTED-->
								<div class="col-4">
									 <label >Rear Window Washer</label>
									 <input type="text" id="rwash1" class="form-control mb-30" readonly>
								</div>   
								<div class="col-4">
									<label >Wheel Cover</label>
									<input type="text" id="wcover1" class="form-control mb-30" readonly>
									</div>  		 
								
							 <div class="col-4">
									<label >Rear Spoiler</label>
									<input type="text" id="spoiler1" class="form-control mb-30" readonly>
							 </div>  
								<div class="col-4">
									 <label >Roof Carrier</label>
									 <input type="text" id="carrier1" class="form-control mb-30" readonly>
									 </div>  		 
								 
								<div class="col-4">
									 <label >Rearview Mirror Indicator</label>
									 <input type="text" id="rmi1" class="form-control mb-30" readonly>
								</div>      
								<div class="col-4">
									<label >Chrome Grill</label>
									<input type="text" id="cgrill1" class="form-control mb-30" readonly>
							 </div> 		
							</div>
							


								</div>
									</div>
									</div>	
									
						</div>	

						<div class="panel-group" id="accordion61">
							<div class="panel panel-default">
								<div class="panel-heading">
								<center> <h2 class="panel-title">
									<a data-toggle="" data-parent="#accordion61" href="#collapse61" onclick="togl17()">Safety Features</a>
								</h2></center>
								</div>
								<div id="collapse61" class="panel-collapse collapse">
								<div class="panel-body">
						 <div class="row"> <!-- ROW STARTED-->
								 <div class="col-4">
									<label >ABS</label>
									<input type="text" id="abs1" class="form-control mb-30" readonly>
									</div>  
								 <div class="col-4">
									<label >EBD</label>
									<input type="text" id="ebd1" class="form-control mb-30" readonly>
								 </div>  
								
								 <div class="col-4">
									<label >Central Lock</label>
									<input type="text" id="cenlock1" class="form-control mb-30" readonly>
								 </div>  
												 
						 </div>	
						 <div class="row"> <!-- ROW STARTED-->
							<div class="col-4">
								<label >Parking Senser</label>
								<input type="text" id="psense1" class="form-control mb-30" readonly>
						 </div>
						<div class="col-4">
							 <label >Auto Door Lock</label>
							 <input type="text" id="adlock1" class="form-control mb-30" readonly>
							 </div>  		 
						 
						<div class="col-4">
							 <label >Brake Assist</label>
							 <input type="text" id="bassist1" class="form-control mb-30" readonly>
						</div>      
								
					</div>

					<div class="row"> <!-- ROW STARTED-->
						<div class="col-4">
							<label >Child Safety Lock</label>
							<input type="text" id="cslock1" class="form-control mb-30" readonly>
							</div>  		 
						
					 <div class="col-4">
							<label >Passenger Airbag</label>
							<input type="text" id="pabag1" class="form-control mb-30" readonly>
					 </div>  
						<div class="col-4">
							 <label >Rear Side Airbag</label>
							 <input type="text" id="rsabag1" class="form-control mb-30" readonly>
							 </div>  		 
						 
							 
								
					</div>
					<div class="row"> <!-- ROW STARTED-->
						<div class="col-4">
							 <label >Driver Airbag</label>
							 <input type="text" id="dabag1" class="form-control mb-30" readonly>
						</div>   
						<div class="col-4">
							<label >Front Side Airbag</label>
							<input type="text" id="fsabag1" class="form-control mb-30" readonly>
							</div>  		 
						
					 <div class="col-4">
							<label >Day Night ORVM</label>
							<input type="text" id="dnrvm1" class="form-control mb-30" readonly>
					 </div>  
							 
					</div>
					<div class="row">
						<div class="col-4">
							 <label >Adjustable Seat</label>
							 <input type="text" id="adseat1" class="form-control mb-30" readonly>
						</div>      
						<div class="col-4">
							<label >Door AjarWarning</label>
							<input type="text" id="dawarn1" class="form-control mb-30" readonly>
					 </div> 	
					 <div class="col-4">
						<label >Keyless Entry</label>
						<input type="text" id="klentry1" class="form-control mb-30" readonly>
						</div>  	
					</div>
					
					<div class="row"> <!-- ROW STARTED-->
						<div class="col-4">
							 <label >StabilityControl System</label>
							 <input type="text" id="scsys1" class="form-control mb-30" readonly>
						</div>   
						<div class="col-4">
							<label >Hill Assist</label>
							<input type="text" id="hass1" class="form-control mb-30" readonly>
							</div>  		 
						
					 <div class="col-4">
							<label >Rear Camera</label>
							<input type="text" id="rcam1" class="form-control mb-30" readonly>
					 </div>  
						 		 
					</div>
					<div class="row">
						<div class="col-4">
							 <label >Impact Sensing Auto Door Unlock</label>
							 <input type="text" id="adu1" class="form-control mb-30" readonly>
						</div>      
						<div class="col-4">
							<label >Power Door Lock</label>
							<input type="text" id="pdl1" class="form-control mb-30" readonly>
					 </div> 	
					 <div class="col-4">
						<label >Anti Theft Alarm</label>
						<input type="text" id="alarm1" class="form-control mb-30" readonly>
						</div>  	
					</div>
					<div class="row">
						<div class="col-4">
							 <label >Traction Control</label>
							 <input type="text" id="tctrl1" class="form-control mb-30" readonly>
						</div>      
						<div class="col-4">
							<label >Engine Immobilizer</label>
							<input type="text" id="ei1" class="form-control mb-30" readonly>
					 </div> 	
					 <div class="col-4">
						<label >Engine Check Warning</label>
						<input type="text" id="ecwarn1" class="form-control mb-30" readonly>
						</div>  
						<div class="col-4">
							<label >Follow me Home Lamp</label>
							<input type="text" id="fhlamp1" class="form-control mb-30" readonly>
							</div> 	
							<div class="col-4">
					<label >Seatbelt warning</label>
					<input type="text" id="sbwarn1" class="form-control mb-30" readonly>
					</div>
					<div class="col-4">
							<label >Anti Theft Device</label>
							<input type="text" id="atdev1" class="form-control mb-30" readonly>
											</div> 							  	
					</div>

						</div>
							</div>
							</div>	
							
				</div>
				

				<div class="panel-group" id="accordion62">
					<div class="panel panel-default">
						<div class="panel-heading">
						<center> <h2 class="panel-title">
							<a data-toggle="" data-parent="#accordion62" href="#collapse62" onclick="togl18()">Entertainment Features</a>
						</h2></center>
						</div>
						<div id="collapse62" class="panel-collapse collapse">
						<div class="panel-body">
				 <div class="row"> <!-- ROW STARTED-->
						 <div class="col-4">
							<label >CD/DVD</label>
							<input type="text" id="cd1" class="form-control mb-30" readonly>
							</div>  
						 <div class="col-4">
							<label >Radio</label>
							<input type="text" id="radio1" class="form-control mb-30" readonly>
						 </div>  
						
						 <div class="col-4">
							<label >Front Speaker</label>
							<input type="text" id="speaker1" class="form-control mb-30" readonly>
						 </div>  
										 
				 </div>	
				 <div class="row"> <!-- ROW STARTED-->
					<div class="col-4">
						<label >USB/AUX</label>
						<input type="text" id="usb1" class="form-control mb-30" readonly>
				 </div>
				<div class="col-4">
					 <label >Bluetooth</label>
					 <input type="text" id="bt1" class="form-control mb-30" readonly>
					 </div>  		 
				 
				<div class="col-4">
					 <label >Rear Speaker</label>
					 <input type="text" id="rspeaker1" class="form-control mb-30" readonly>
				</div>      
						
			</div>

				</div>
					</div>
					</div>	
					
		</div>	

							</div>
								</div>
								<center><input type="submit" class="form-control btn-success" value="Results" style="width:800px;"></center>
				
					</form>

			</div>
		</div>
	<!--/section-->
	
			 
		</div>
		<div style="margin-top: 10px;"></div>
		
	<!--/section-->
	<script>
			function togl1(){
				$("#collapse11").collapse('toggle');
			}
			function togl2(){
				$("#collapse12").collapse('toggle');
			}
			function togl3(){
				$("#collapse13").collapse('toggle');
			}
			function togl4(){
				$("#collapse14").collapse('toggle');
			}
			function togl5(){
				$("#collapse15").collapse('toggle');
			}
			function togl6(){
				$("#collapse16").collapse('toggle');
			}
			function togl7(){
				$("#collapse60").collapse('toggle');
			}
			function togl8(){
				$("#collapse61").collapse('toggle');
			}
			function togl9(){
				$("#collapse62").collapse('toggle');
			}

			// function togl10(){
			// 	$("#collapse100").collapse('toggle');
			// }
			// function togl11(){
			// 	$("#collapse2").collapse('toggle');
			// }
			// function togl12(){
			// 	$("#collapse3").collapse('toggle');
			// }
			// function togl13(){
			// 	$("#collapse4").collapse('toggle');
			// }
			// function togl14(){
			// 	$("#collapse5").collapse('toggle');
			// }
			// function togl15(){
			// 	$("#collapse").collapse('toggle');
			// }
			// function togl16(){
			// 	$("#collapse50").collapse('toggle');
			// }
			// function togl17(){
			// 	$("#collapse51").collapse('toggle');
			// }
			// function togl18(){
			// 	$("#collapse52").collapse('toggle');
			// }
		</script>


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
				 &copy; 2019 CarDeals<i class="fa fa-heart"></i>
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

