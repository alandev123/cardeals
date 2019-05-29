<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link href="css/accr.css" rel='stylesheet' type='text/css' />
    <script src="js/accr.js"></script> -->
    <!-- Title -->
    <title>Car-Deals</title>
    
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/logo1.png">
<script src="js/valid.js"></script>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">



</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->
 
    <!-- Header Area Start -->
    @include('Company.companyheader');

    <section class="roberto-about-area section-padding-10-0">
        <!-- Hotel Search Form Area -->
        <div class="roberto-contact-form mt-80 mb-100">
        <center><b> <h2>Model Details</h2></b></center>

                               <!-- Form -->
                               <form method="POST" action="/addfeature" enctype="multipart/form-data">
                               @csrf
                                   <div class="row">
                                     <div class="col-3">
                                                    <label for="carname">Model</label>
                                             <select name="carname" id="carname" class="form-control" required>
                                             <option disabled="disabled" selected="selected">Select</option>
                                             @isset($request)
                               
                                             @foreach($request as $car)
                                             
                                                 <option>{{$car->carname}}</option>
                                                 @endforeach
                                                 @endisset
                                              </select>
                                     </div>
                                     <div class="col-3">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" class="form-control mb-30" placeholder="Car Image" required>
                                    </div>
                                       <div class="col-3">
                                          <label for="cartype">Car Type</label>
                                          <select name="cartype" id="cartype" class="form-control" required>
                                            <option disabled="disabled" selected="selected">Select</option>
                                            <option>Sedan</option>
                                            <option>Hatchback</option>
                                            <option>SUV</option>
                                            <option>MUV</option>
                                            <option>Crossover</option>
                                        </select>    
                                        </div>
                                       <div class="col-3">
                                           <label for="varient">Varient</label>
                                           <input type="text" name="varient" class="form-control mb-30" placeholder="varient" required>
                                       </div>
                                       <div class="col-3">
                                          <label for="price">Ex-showroom price in Lakh</label>
                                          <input type="text" name="price" class="form-control mb-30" placeholder="Ex-showroom Price" required>
                                      </div>
                                       
                                    </div>
                                    <center> <h2>Engine and Transmission</h2></center>
                                    <div class="row"> <!-- ROW STARTED-->>
                                       <div class="col-3">
                                           <label >Engine Type</label>
                                           <input type="text" name="entype" class="form-control mb-30" placeholder="Engine Type"required>
                                        </div>  
                                
                                        <div class="col-3">
                                            <label >Engine Description</label>
                                            <input type="text" name="endes" class="form-control mb-30" placeholder="Engine Description" required>
                                         </div>  
                                         <div class="col-3">
                                            <label >Displacement</label>
                                            <input type="number" name="cc" class="form-control mb-30" placeholder="CC" required>
                                         </div>    
                                          
                                                                        
                                </div><!--  row end div  -->
                                <div class="row"> <!-- ROW STARTED-->>
                                    <div class="col-3">
                                        <label >Max Power</label>
                                        <input type="text" name="power" class="form-control mb-30" placeholder="power in bhp and rpm" required>
                                     </div>  
                             
                                     <div class="col-3">
                                         <label >Max Torque</label>
                                         <input type="text" name="torque" class="form-control mb-30" placeholder="Torque in nm and rpm" required>
                                      </div>  
                                      <div class="col-3">
                                         <label >No of Cylinders</label>
                                         <input type="number" name="cylinder" class="form-control mb-30" placeholder="Cylinders" required>
                                      </div>         
                                                       
                             </div><!--  row end div  -->

                       <div class="row"> <!-- ROW STARTED-->>
                               <div class="col-3">
                                    <label >Valves Per cylinder</label>
                                    <input type="number" name="valves" class="form-control mb-30" placeholder="Valves Per cylinder" required> 
                                  </div>  
                               <div class="col-3">
                                  <label >Drivetype</label>
                                  <input type="text" name="dtype" class="form-control mb-30" placeholder="Drivetype" required>
                               </div>  
                                
                               <div class="col-3">
                                  <label >Fuel Supply System</label>
                                  <input type="text" name="fsupply" class="form-control mb-30" placeholder="Fuel Supply" required>
                               </div>         
                                                      
                            </div><!--  row end div  -->

                             <div class="row"> <!-- ROW STARTED-->>
                                <div class="col-3">
                                    <label>Transmission Type</label>
                                    <input type="text" name="trans" class="form-control mb-30" placeholder="Transmission type" required>
                                 </div>  
                         
                                 <div class="col-3">
                                     <label>Gear Box</label>
                                     <input type="number" name="gear" class="form-control mb-30" placeholder="Gear Box" required>
                                  </div>  
                                  <div class="col-3">
                                     <label>Clutch Type</label>
                                     <input type="text" name="clutch" class="form-control mb-30" placeholder="Clutch Type" required>
                                  </div>         
                                                   
                         </div><!--  row end div  -->
                         <center><h2>Performance & Fuel</h2></center>
                         <div class="row"> <!-- ROW STARTED-->>
                             <div class="col-3">
                                 <label>Top Speed</label>
                                 <input type="text" name="speed" class="form-control mb-30" placeholder="Top Speed in KMPH" required>
                              </div> 
                            <div class="col-3">
                                <label>Acceleration(0-100)</label>
                                <input type="text" name="acce" class="form-control mb-30" placeholder="Acceleration in seconds" required>
                             </div>  
                     
                              
                              <div class="col-3">
                                <label>Braking (60-0)</label>
                                <input type="text" name="braking" class="form-control mb-30" placeholder="Braking(60-0)" required>
                             </div>        
                                               
                     </div><!--  row end div  -->
                     <div class="row"> <!-- ROW STARTED-->>
                        <div class="col-3">
                            <label>ARAI Milage</label>
                            <input type="number" name="milage" class="form-control mb-30" placeholder="Milage in KMPL" required>
                         </div>  
                 
                         <div class="col-3">
                            <label>Fuel Type</label>
                            <input type="text" name="fuel" class="form-control mb-30" placeholder="Fuel Type" required>
                         </div> 
                          <div class="col-3">
                             <label>Tank Capacity</label>
                             <input type="number" name="tcapacity" class="form-control mb-30" placeholder="Tank Capacity" required>
                          </div>         
                                           
                 </div><!--  row end div  -->

                 <center><h2>Suspension, Steering & Brake</h2></center>
                         <div class="row"> <!-- ROW STARTED-->>
                             <div class="col-3">
                                 <label>Front Suspension</label>
                                 <input type="text" name="fsus" class="form-control mb-30" placeholder="Front Suspension" required>
                              </div> 
                            <div class="col-3">
                                <label>Rear Suspension</label>
                                <input type="text" name="rsus" class="form-control mb-30" placeholder="Rear Suspension" required>
                             </div>  
                     
                              
                              <div class="col-3">
                                <label>Shock Absorber Type</label>
                                <input type="text" name="shock" class="form-control mb-30" placeholder="Shock Absorber Type" required>
                             </div>        
                                               
                     </div><!--  row end div  -->
                     <div class="row"> <!-- ROW STARTED-->>
                        <div class="col-3">
                            <label>Steering Type</label>
                            <input type="text" name="steert" class="form-control mb-30" placeholder="Steering Type" required>
                         </div>  
                 
                         <div class="col-3">
                            <label>Steering Column</label>
                            <input type="text" name="steerc" class="form-control mb-30" placeholder="Steering Column" required>
                         </div> 
                          <div class="col-3">
                             <label>Turning Radius</label>
                             <input type="text" name="tradius" class="form-control mb-30" placeholder="Turning Radius in Meter" required>
                          </div>         
                                           
                 </div><!--  row end div  -->
                 <center><h2>Diamension & Capacity</h2></center>
                         <div class="row"> <!-- ROW STARTED-->>
                             <div class="col-3">
                                 <label>Length</label>
                                 <input type="number" name="length" class="form-control mb-30" placeholder="Total Length in mm" required>
                              </div> 
                            <div class="col-3">
                                <label>Width</label>
                                <input type="number" name="width" class="form-control mb-30" placeholder="Total Width in mm" required>
                             </div>  
                     
                              
                              <div class="col-3">
                                <label>Height</label>
                                <input type="number" name="height" class="form-control mb-30" placeholder="Height in mm" required>
                             </div>        
                                               
                     </div><!--  row end div  -->
                     <div class="row"> <!-- ROW STARTED-->>
                             <div class="col-3">
                                 <label>Wheelbase</label>
                                 <input type="number" name="wbase" class="form-control mb-30" placeholder="Wheelbase in mm" required>
                              </div> 
                            <div class="col-3">
                                <label>Ground Clearence</label>
                                <input type="number" name="ground" class="form-control mb-30" placeholder="Ground Clearence in mm" required>
                             </div>  
                     
                              
                              <div class="col-3">
                                <label>Kerb Weight</label>
                                <input type="number" name="kweight" class="form-control mb-30" placeholder="Kerb Weight in Kg" required>
                             </div>        
                                               
                     </div><!--  row end div  -->


            <div class="row"> <!-- ROW STARTED-->>
              <div class="col-3">
                       <label>Cargo Volume</label>
                   <input type="number" name="cvolume" class="form-control mb-30" placeholder="Cargo Volume in Litres" required>
                       </div> 
                       <div class="col-3">
                      <label>Tyre Type</label>
                      <input type="text" name="trtype" class="form-control mb-30" placeholder="Tyre Type" required>
               </div>  
                            
                 <div class="col-3">
                 <label>Tyre Size</label>
               <input type="text" name="tsize" class="form-control mb-30" placeholder="Tyre Size" required>
                </div>        
                                               
                </div><!--  row end div  -->
                <div class="row"> <!-- ROW STARTED-->>
              <div class="col-3">
                       <label>Seating Capacity</label>
                   <input type="number" name="seat" class="form-control mb-30" placeholder="No. of Seats" required>
                       </div> 
                       <div class="col-3">
                      <label>Door</label>
                      <input type="text" name="door" class="form-control mb-30" placeholder="No. of Doors" required>
               </div>  
                              
                </div><!--  row end div  -->

    <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
      <center> <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Comfort & Convenience</a>
        </h2></center>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">
<!-- <center><h2>Comfort & Convenience</h2></center> -->
     <div class="row"> <!-- ROW STARTED-->>
        <div class="col-3">
            <label>Power Steering</label></br>
            <input type="radio" name="powerst" value="yes">Yes</br>
            <input type="radio" name="powerst" value="no" >No
        </br>
         </div>  
 
         <div class="col-3">
            <label>Power Window Front</label></br>
            <input type="radio" name="powf" value="yes">Yes</br>
            <input type="radio" name="powf" value="no" >No
        </br>
         </div>
         <div class="col-3">
            <label>Power Window Rear</label></br>
            <input type="radio" name="powr" value="yes">Yes</br>
            <input type="radio" name="powr" value="no" >No
        </br>
         </div> 
                
                           
 </div><!--  row end div  -->
 <div style="margin-top:2%;"  class="row"> <!-- ROW STARTED-->>
    <div class="col-3">
        <label>Automatic Climate Control</label></br>
        <input type="radio" name="acctrl" value="yes">Yes</br>
        <input type="radio" name="acctrl" value="no" >No
    </br>
     </div>  

     <div class="col-3">
        <label>Remote Trunk Opener</label></br>
        <input type="radio" name="rto" value="yes">Yes</br>
        <input type="radio" name="rto" value="no" >No
    </br>
     </div>
     <div class="col-3">
        <label>Trunk Light</label></br>
        <input type="radio" name="tlight" value="yes">Yes</br>
        <input type="radio" name="tlight" value="no" >No
    </br>
     </div> 
            
                       

</div><!--  row end div  -->
<div style="margin-top:2%;" class="row"> <!-- ROW STARTED-->>
   <div class="col-3">
       <label>Rear Armrest (Center)</label></br>
       <input type="radio" name="rar" value="yes">Yes</br>
       <input type="radio" name="rar" value="no" >No
    </br>
    </div>  

    <div class="col-3">
       <label>Front Cupholder</label></br>
       <input type="radio" name="fch" value="yes">Yes</br>
       <input type="radio" name="fch" value="no" >No
    </br>
    </div>
    <div class="col-3">
       <label>Rear AC vents</label></br>
       <input type="radio" name="rac" value="yes">Yes</br>
       <input type="radio" name="rac" value="no" >No
    </br>
    </div> 
           
                      
</div><!--  row end div  -->
 <div style="margin-top:2%;"  class="row"> <!-- ROW STARTED-->>
    <div class="col-3">
        <label>Rear Seat Headrest</label></br>
        <input type="radio" name="rshr" value="yes">Yes</br>
        <input type="radio" name="rshr" value="no" >No
    </br>
     </div>  

     <div class="col-3">
        <label>Rear Parking Sensor</label></br>
        <input type="radio" name="rps" value="yes">Yes</br>
        <input type="radio" name="rps" value="no" >No
    </br>
     </div>
     <div class="col-3">
        <label for="gw">Multi function Steering Wheel</label></br>
        <input type="radio" name="msteer" value="yes">Yes</br>
        <input type="radio" name="msteer" value="no" >No
    </br>
     </div> 
            
                       

</div><!--  row end div  -->
<div style="margin-top:2%;" class="row"> <!-- ROW STARTED-->>
   <div class="col-3">
       <label>Navigation System</label></br>
       <input type="radio" name="navigation" value="yes">Yes</br>
       <input type="radio" name="navigation" value="no" >No
    </br>
    </div>  

    <div class="col-3">
       <label>Air Quality Control</label></br>
       <input type="radio" name="aqc" value="yes">Yes</br>
       <input type="radio" name="aqc" value="no" >No
    </br>
    </div>
    <div class="col-3">
       <label>Remote Fuel Lid opener</label></br>
       <input type="radio" name="rflo" value="yes">Yes</br>
       <input type="radio" name="rflo" value="no" >No
    </br>
    </div> 
           
                      
</div><!--  row end div  -->

<!-- 
Features list copied
-->
<div style="margin-top:2%;"  class="row"> <!-- ROW STARTED-->>
    <div class="col-3">
        <label>Cruise Control</label></br>
        <input type="radio" name="cruise" value="yes">Yes</br>
        <input type="radio" name="cruise" value="no" >No
    </br>
     </div>  

     <div class="col-3">
        <label>Engine Start and Stop Button</label></br>
        <input type="radio" name="ssbtn" value="yes">Yes</br>
        <input type="radio" name="ssbtn" value="no" >No
    </br>
     </div>
     <div class="col-3">
        <label>Gear Shift Indicator</label></br>
        <input type="radio" name="gsi" value="yes">Yes</br>
        <input type="radio" name="gsi" value="no" >No
    </br>
     </div> 
            
        
</div><!--  row end div  -->
</div>
</div>
<div class="panel panel-default" style="margin-top:2%;">
      <div class="panel-heading">
      <center> <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Interior Features</a>
        </h2></center>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
<!-- <center><h2 style="margin-top:2%;">Interior Features</h2></center> -->


<div style="margin-top:2%;" class="row"> <!-- ROW STARTED-->>
   <div class="col-3">
       <label>AC</label></br>
       <input type="radio" name="ac" value="yes">Yes</br>
       <input type="radio" name="ac" value="no" >No
    </br>
    </div>  

    <div class="col-3">
       <label>Heater</label></br>
       <input type="radio" name="heater" value="yes">Yes</br>
       <input type="radio" name="heater" value="no" >No
    </br>
    </div>
    <div class="col-3">
       <label>Trip Meter</label></br>
       <input type="radio" name="tmeter" value="yes">Yes</br>
       <input type="radio" name="tmeter" value="no" >No
    </br>
    </div> 
           
                      
</div><!--  row end div  -->
 <div style="margin-top:2%;"  class="row"> <!-- ROW STARTED-->>
    <div class="col-3">
        <label>Clock</label></br>
        <input type="radio" name="clock" value="yes">Yes</br>
        <input type="radio" name="clock" value="no" >No
    </br>
     </div>  

     <div class="col-3">
        <label>Electrically adjustable Seat</label></br>
        <input type="radio" name="easeat" value="yes">Yes</br>
        <input type="radio" name="easeat" value="no" >No
    </br>
     </div>
     <div class="col-3">
        <label>Dual Tone Dashboard</label></br>
        <input type="radio" name="dtd" value="yes">Yes</br>
        <input type="radio" name="dtd" value="no" >No
    </br>
     </div> 
            
                       

</div><!--  row end div  -->


<div style="margin-top:2%;" class="row"> <!-- ROW STARTED-->>
   <div class="col-3">
       <label>Tachometer</label></br>
       <input type="radio" name="tameter" value="yes">Yes</br>
       <input type="radio" name="tameter" value="no" >No
    </br>
    </div>  

    <div class="col-3">
       <label>Leather Seat</label></br>
       <input type="radio" name="lseat" value="yes">Yes</br>
       <input type="radio" name="lseat" value="no" >No
    </br>
    </div>
    <div class="col-3">
       <label>Digital Odometer</label></br>
       <input type="radio" name="odo" value="yes">Yes</br>
       <input type="radio" name="odo" value="no" >No
    </br>
    </div> 
           
                      
</div><!--  row end div  -->

<div style="margin-top:2%;" class="row"> <!-- ROW STARTED-->>
   <div class="col-3">
       <label>Leather Steering Wheel</label></br>
       <input type="radio" name="lswheel" value="yes">Yes</br>
       <input type="radio" name="lswheel" value="no" >No
    </br>
    </div>                  
</div><!--  row end div  -->

<!--
   Exterior Features
-->
</div>
    </div>
    <div class="panel panel-default" style="margin-top:2%;">
      <div class="panel-heading">
      <center>    <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Exterior Features</a>
        </h2></center>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
<!-- <center><h2>Exterior Features</h2></center> -->
     <div class="row"> <!-- ROW STARTED-->>
        <div class="col-3">
            <label>Adjustable Healamp</label></br>
            <input type="radio" name="ahlamp" value="yes">Yes</br>
            <input type="radio" name="ahlamp" value="no" >No
        </br>
         </div>  
 
         <div class="col-3">
            <label>Front Fog Lamp</label></br>
            <input type="radio" name="ffog" value="yes">Yes</br>
            <input type="radio" name="ffog" value="no" >No
        </br>
         </div>
         <div class="col-3">
            <label>Rear Fog Lamp</label></br>
            <input type="radio" name="rfog" value="yes">Yes</br>
            <input type="radio" name="rfog" value="no" >No
        </br>
         </div> 
                
                           
 </div><!--  row end div  -->
 <div style="margin-top:2%;"  class="row"> <!-- ROW STARTED-->>
    <div class="col-3">
        <label>Rear Window Wiper</label></br>
        <input type="radio" name="rww" value="yes">Yes</br>
        <input type="radio" name="rww" value="no" >No
    </br>
     </div>  

     <div class="col-3">
        <label>Alloy Wheel</label></br>
        <input type="radio" name="awheel" value="yes">Yes</br>
        <input type="radio" name="awheel" value="no" >No
    </br>
     </div>
     <div class="col-3">
        <label>Sun Roof</label></br>
        <input type="radio" name="sroof" value="yes">Yes</br>
        <input type="radio" name="sroof" value="no" >No
    </br>
     </div> 
            
                       

</div><!--  row end div  -->
<div style="margin-top:2%;" class="row"> <!-- ROW STARTED-->>
   <div class="col-3">
       <label>Roof Rail</label></br>
       <input type="radio" name="rrail" value="yes">Yes</br>
       <input type="radio" name="rrail" value="no" >No
    </br>
    </div>  

    <div class="col-3">
       <label>Power Adjustable Rearview mirror</label></br>
       <input type="radio" name="orvm" value="yes">Yes</br>
       <input type="radio" name="orvm" value="no" >No
    </br>
    </div>
    <div class="col-3">
       <label>Rain sensing Wipers</label></br>
       <input type="radio" name="rsw" value="yes">Yes</br>
       <input type="radio" name="rsw" value="no" >No
    </br>
    </div> 
           
                      
</div><!--  row end div  -->
 <div style="margin-top:2%;"  class="row"> <!-- ROW STARTED-->>
    <div class="col-3">
        <label>Rear Window Washer</label></br>
        <input type="radio" name="rwash" value="yes">Yes</br>
        <input type="radio" name="rwash" value="no" >No
    </br>
     </div>  

     <div class="col-3">
        <label>Wheel Cover</label></br>
        <input type="radio" name="wcover" value="yes">Yes</br>
        <input type="radio" name="wcover" value="no" >No
    </br>
     </div>
     <div class="col-3">
        <label>Rear Spoiler</label></br>
        <input type="radio" name="spoiler" value="yes">Yes</br>
        <input type="radio" name="spoiler" value="no" >No
    </br>
     </div> 
            
                       

</div><!--  row end div  -->
<div style="margin-top:2%;" class="row"> <!-- ROW STARTED-->>
   <div class="col-3">
       <label>Roof Carrier</label></br>
       <input type="radio" name="carrier" value="yes">Yes</br>
       <input type="radio" name="carrier" value="no" >No
    </br>
    </div>  

    <div class="col-3">
       <label>Rearview Mirror Indicator </label></br>
       <input type="radio" name="rmi" value="yes">Yes</br>
       <input type="radio" name="rmi" value="no" >No
    </br>
    </div>
    <div class="col-3">
       <label>Chrome Grill</label></br>
       <input type="radio" name="cgrill" value="yes">Yes</br>
       <input type="radio" name="cgrill" value="no" >No
    </br>
    </div> 
           
                      
</div>
<!--  row end div  -->
</div>
</div>
<!--
   End of Exterior Features
-->

<!--
   Safety Features
-->
<div class="panel panel-default" style="margin-top:2%;">
      <div class="panel-heading">
      <center>   <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Safety Features</a>
        </h2></center>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">

<!-- <center><h2>Safety Features</h2></center> -->
     <div class="row"> <!-- ROW STARTED-->>
        <div class="col-3">
            <label>ABS</label></br>
            <input type="radio" name="abs" value="yes">Yes</br>
            <input type="radio" name="abs" value="no" >No
        </br>
         </div>  
 
         <div class="col-3">
            <label>EBD</label></br>
            <input type="radio" name="ebd" value="yes">Yes</br>
            <input type="radio" name="ebd" value="no" >No
        </br>
         </div>
         <div class="col-3">
            <label>Central Lock</label></br>
            <input type="radio" name="cenlock" value="yes">Yes</br>
            <input type="radio" name="cenlock" value="no" >No
        </br>
         </div> 
                
                           
 </div><!--  row end div  -->
 <div style="margin-top:2%;"  class="row"> <!-- ROW STARTED-->>
    <div class="col-3">
        <label>Parking Sensor</label></br>
        <input type="radio" name="psense" value="yes">Yes</br>
        <input type="radio" name="psense" value="no" >No
    </br>
     </div>  

     <div class="col-3">
        <label>Speed Sensing Auto Doorlock</label></br>
        <input type="radio" name="adlock" value="yes">Yes</br>
        <input type="radio" name="adlock" value="no" >No
    </br>
     </div>
     <div class="col-3">
        <label>Brake Assist</label></br>
        <input type="radio" name="bassist" value="yes">Yes</br>
        <input type="radio" name="bassist" value="no" >No
    </br>
     </div> 
            
                       

</div><!--  row end div  -->
<div style="margin-top:2%;" class="row"> <!-- ROW STARTED-->>
   <div class="col-3">
       <label>Child Safety Lock</label></br>
       <input type="radio" name="cslock" value="yes">Yes</br>
       <input type="radio" name="cslock" value="no" >No
    </br>
    </div>  

    <div class="col-3">
       <label>Passenger Airbag</label></br>
       <input type="radio" name="pabag" value="yes">Yes</br>
       <input type="radio" name="pabag" value="no" >No
    </br>
    </div>
    <div class="col-3">
       <label>Rear Side Airbag</label></br>
       <input type="radio" name="rsabag" value="yes">Yes</br>
       <input type="radio" name="rsabag" value="no" >No
    </br>
    </div> 
           
                      
</div><!--  row end div  -->
 <div style="margin-top:2%;"  class="row"> <!-- ROW STARTED-->>
    <div class="col-3">
        <label>Driver Airbag</label></br>
        <input type="radio" name="dabag" value="yes">Yes</br>
        <input type="radio" name="dabag" value="no" >No
    </br>
     </div>  

     <div class="col-3">
        <label>Front Side Airbag</label></br>
        <input type="radio" name="fsabag" value="yes">Yes</br>
        <input type="radio" name="fsabag" value="no" >No
    </br>
     </div>
     <div class="col-3">
        <label>Day And Night RVM</label></br>
        <input type="radio" name="dnrvm" value="yes">Yes</br>
        <input type="radio" name="dnrvm" value="no" >No
    </br>
     </div> 
            
                       

</div><!--  row end div  -->
<div style="margin-top:2%;" class="row"> <!-- ROW STARTED-->>
   <div class="col-3">
       <label>Seatbelt Warning</label></br>
       <input type="radio" name="sbwarn" value="yes">Yes</br>
       <input type="radio" name="sbwarn" value="no" >No
    </br>
    </div>  

    <div class="col-3">
       <label>Adjustable Seat</label></br>
       <input type="radio" name="adseat" value="yes">Yes</br>
       <input type="radio" name="adseat" value="no" >No
    </br>
    </div>
    <div class="col-3">
       <label>Door Ajar Warning</label></br>
       <input type="radio" name="dawarn" value="yes">Yes</br>
       <input type="radio" name="dawarn" value="no" >No
    </br>
    </div> 
           
                      
</div><!--  row end div  -->

<div style="margin-top:2%;"  class="row"> <!-- ROW STARTED-->>
    <div class="col-3">
        <label>Keyless Entry</label></br>
        <input type="radio" name="klentry" value="yes">Yes</br>
        <input type="radio" name="klentry" value="no" >No
    </br>
     </div>  

     <div class="col-3">
        <label>Stability Control System</label></br>
        <input type="radio" name="scsys" value="yes">Yes</br>
        <input type="radio" name="scsys" value="no" >No
    </br>
     </div>
     <div class="col-3">
        <label>Hill Assist</label></br>
        <input type="radio" name="hass" value="yes">Yes</br>
        <input type="radio" name="hass" value="no" >No
    </br>
     </div> 
  
</div><!--  row end div  -->
<div style="margin-top:2%;" class="row"> <!-- ROW STARTED-->>
   <div class="col-3">
       <label>Rear Camera</label></br>
       <input type="radio" name="rcam" value="yes">Yes</br>
       <input type="radio" name="rcam" value="no" >No
    </br>
    </div>  

    <div class="col-3">
       <label>Anti Theft Device</label></br>
       <input type="radio" name="atdev" value="yes">Yes</br>
       <input type="radio" name="atdev" value="no" >No
    </br>
    </div>
    <div class="col-3">
       <label>Impact Sensing Auto Door Unlock</label></br>
       <input type="radio" name="adu" value="yes">Yes</br>
       <input type="radio" name="adu" value="no" >No
    </br>
    </div> 
           
                      
</div><!--  row end div  -->
<div style="margin-top:2%;" class="row"> <!-- ROW STARTED-->>
   <div class="col-3">
       <label>Power Doorlock</label></br>
       <input type="radio" name="pdl" value="yes">Yes</br>
       <input type="radio" name="pdl" value="no" >No
    </br>
    </div>  

    <div class="col-3">
       <label>Anti Theft Alarm</label></br>
       <input type="radio" name="alarm" value="yes">Yes</br>
       <input type="radio" name="alarm" value="no" >No
    </br>
    </div>
    <div class="col-3">
       <label>Traction Control</label></br>
       <input type="radio" name="tctrl" value="yes">Yes</br>
       <input type="radio" name="tctrl" value="no" >No
    </br>
    </div> 
                     
</div><!--  row end div  -->
<div style="margin-top:2%;" class="row"> <!-- ROW STARTED-->>
   <div class="col-3">
       <label>Engine Immobilizer</label></br>
       <input type="radio" name="ei" value="yes">Yes</br>
       <input type="radio" name="ei" value="no" >No
    </br>
    </div>  

    <div class="col-3">
       <label>Engine Check Warning</label></br>
       <input type="radio" name="ecwarn" value="yes">Yes</br>
       <input type="radio" name="ecwarn" value="no" >No
    </br>
    </div>
    <div class="col-3">
       <label>Follow me home lamp</label></br>
       <input type="radio" name="fhlamp" value="yes">Yes</br>
       <input type="radio" name="fhlamp" value="no" >No
    </br>
    </div> 
                     
</div><!--  row end div  -->
</div>
</div>
<div class="panel panel-default" style="margin-top:2%;">
      <div class="panel-heading">
      <center>       <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Entertainment Features</a>
        </h2></center>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
<!-- <center><h2>Entertainment</h2></center> -->

<div style="margin-top:2%;" class="row"> <!-- ROW STARTED-->>
   <div class="col-3">
       <label>CD/DVD</label></br>
       <input type="radio" name="cd" value="yes">Yes</br>
       <input type="radio" name="cd" value="no" >No
    </br>
    </div>  

    <div class="col-3">
       <label>Radio</label></br>
       <input type="radio" name="radio" value="yes">Yes</br>
       <input type="radio" name="radio" value="no" >No
    </br>
    </div>
    <div class="col-3">
       <label>Front Speaker</label></br>
       <input type="radio" name="speaker" value="yes">Yes</br>
       <input type="radio" name="speaker" value="no" >No
    </br>
    </div> 
                     
</div><!--  row end div  -->
<div style="margin-top:2%;" class="row"> <!-- ROW STARTED-->>
   <div class="col-3">
       <label>USB & AUX</label></br>
       <input type="radio" name="usb" value="yes">Yes</br>
       <input type="radio" name="usb" value="no" >No
    </br>
    </div>  

    <div class="col-3">
       <label>Bluetooth</label></br>
       <input type="radio" name="bt" value="yes">Yes</br>
       <input type="radio" name="bt" value="no" >No
    </br>
    </div>
    <div class="col-3">
       <label>Rear Speaker</label></br>
       <input type="radio" name="rspeaker" value="yes">Yes</br>
       <input type="radio" name="rspeaker" value="no" >No
    </br>
    </div> 
                     
</div><!--  row end div  -->
</div>
</div>

<!--
   End of Exterior Features
-->





              <div style="margin-top:2%;" class="col-3">
                 <button type="submit" class="btn roberto-btn btn-3 mt-15">Upload</button>
                 </div>
                </form>
       </div>

    <!-- Partner Area Start -->
    <div class="partner-area" style="margin-top:8%;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p1.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p2.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p3.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p4.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End -->




@include('Company.companyfooter');




    <!-- Footer Area End -->



    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>
