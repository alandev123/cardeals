<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Car-Deals</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/logo1.png">

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
                               <h2>Add Car Features</h2>

                               <!-- Form -->
                               <form method="POST" action="/addfeature" enctype="multipart/form-data">
                               @csrf
                                   <div class="row">
                                     <div class="col-3">
                                                    <label for="carname">Car Name</label>
                                             <select name="carname" id="carname" class="form-control">
                                             @isset($request)
                               
                                             @foreach($request as $car)
                                                 <option>{{$car->carname}}</option>
                                                 @endforeach
                                                 @endisset
                                              </select>
                                     </div>
                                     <div class="col-3">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" class="form-control mb-30" placeholder="Car Image">
                                    </div>
                                       <div class="col-3">
                                          <label for="cartype">Car Type</label>
                                          <select name="cartype" id="cartype" class="form-control">
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
                                           <input type="text" name="varient" class="form-control mb-30" placeholder="varient">
                                       </div>
                                       
                                    </div>
                                    <div class="row"> <!-- ROW STARTED-->>
                                       <div class="col-3">
                                           <label for="engine">Engine</label>
                                           <input type="number" name="engine" class="form-control mb-30" placeholder="Engine(CC)">
                                        </div>  
                                
                                        <div class="col-3">
                                            <label for="fuel">Fuel Type</label>
                                            <input type="text" name="fuel" class="form-control mb-30" placeholder="fuel type">
                                         </div>  
                                         <div class="col-3">
                                            <label for="milage">Milage</label>
                                            <input type="number" name="milage" class="form-control mb-30" placeholder="milage inKMPL">
                                         </div>     
                                                                        
                                </div><!--  row end div  -->
                                <div class="row"> <!-- ROW STARTED-->>
                                    <div class="col-3">
                                        <label for="power">Max Power</label>
                                        <input type="text" name="power" class="form-control mb-30" placeholder="power in bhp and rpm">
                                     </div>  
                             
                                     <div class="col-3">
                                         <label for="torque">Torque</label>
                                         <input type="text" name="torque" class="form-control mb-30" placeholder="Torque in nm and rpm">
                                      </div>  
                                      <div class="col-3">
                                         <label for="seat">Seating</label>
                                         <input type="number" name="seat" class="form-control mb-30" placeholder="No. of seats">
                                      </div>         
                                                       
                             </div><!--  row end div  -->
                             <div class="row"> <!-- ROW STARTED-->>
                                <div class="col-3">
                                    <label for="transmission">Transmission Type</label>
                                    <input type="text" name="trans" class="form-control mb-30" placeholder="Transmission type">
                                 </div>  
                         
                                 <div class="col-3">
                                     <label for="gear">Gear Box</label>
                                     <input type="number" name="gear" class="form-control mb-30" placeholder="Gear Box">
                                  </div>  
                                  <div class="col-3">
                                     <label for="speed">Top speed</label>
                                     <input type="number" name="speed" class="form-control mb-30" placeholder="Top Speed in KMPH">
                                  </div>         
                                                   
                         </div><!--  row end div  -->
                         <div class="row"> <!-- ROW STARTED-->>
                            <div class="col-3">
                                <label for="acceleration">Acceleration(0-100)</label>
                                <input type="text" name="acceleration" class="form-control mb-30" placeholder="Acceleration in seconds">
                             </div>  
                     
                             <div class="col-3">
                                 <label for="fsus">Front Suspension</label>
                                 <input type="text" name="fsuspension" class="form-control mb-30" placeholder="Front Suspension">
                              </div>  
                              <div class="col-3">
                                <label for="rsus">Rear Suspension</label>
                                <input type="text" name="rsuspension" class="form-control mb-30" placeholder="Rear Suspension">
                             </div>        
                                               
                     </div><!--  row end div  -->
                     <div class="row"> <!-- ROW STARTED-->>
                        <div class="col-3">
                            <label for="fb">Front Brake</label>
                            <input type="text" name="frontbrake" class="form-control mb-30" placeholder="Front Brake Type">
                         </div>  
                 
                         <div class="col-3">
                            <label for="rb">Rear Brake</label>
                            <input type="text" name="rearbrake" class="form-control mb-30" placeholder="Rear Brake Type">
                         </div> 
                          <div class="col-3">
                             <label for="tradius">Turning Radius</label>
                             <input type="text" name="tradius" class="form-control mb-30" placeholder="Turning Radius in Meters">
                          </div>         
                                           
                 </div><!--  row end div  -->
                 <div class="row"> <!-- ROW STARTED-->>
                    <div class="col-3">
                        <label for="length">Length</label>
                        <input type="number" name="length" class="form-control mb-30" placeholder="Length in mm">
                     </div>  
             
                     <div class="col-3">
                        <label for="width">Width</label>
                        <input type="number" name="width" class="form-control mb-30" placeholder="width in mm">
                     </div>  
                     <div class="col-3">
                        <label for="height">Height</label>
                        <input type="number" name="height" class="form-control mb-30" placeholder="Height in mm">
                     </div>         
                                       
             </div><!--  row end div  -->
             <div class="row"> <!-- ROW STARTED-->>
                <div class="col-3">
                    <label for="ground">Ground Clearence</label>
                    <input type="number" name="ground" class="form-control mb-30" placeholder="Ground Clearence in mm">
                 </div>  
         
                 <div class="col-3">
                     <label for="wb">Wheel Base</label>
                     <input type="number" name="wheelbase" class="form-control mb-30" placeholder="Wheel Base in mm">
                  </div>  
                  <div class="col-3">
                     <label for="kw">Kerb Weight</label>
                     <input type="number" name="kerb" class="form-control mb-30" placeholder="Kerb Weight in Kg">
                  </div>         
                                   
         </div><!--  row end div  -->
         <div class="row"> <!-- ROW STARTED-->>
            <div class="col-3">
                <label for="gw">gross Weight</label>
                <input type="number" name="grossw" class="form-control mb-30" placeholder="Gross Weight in kg">
             </div>  
     
             <div class="col-3">
                 <label for="cargo">Cargo volume</label>
                 <input type="number" name="cargo" class="form-control mb-30" placeholder="Cargo Volume in litre">
              </div>  
              <div class="col-3">
                 <label for="door">Number of Doors</label>
                 <input type="number" name="door" class="form-control mb-30" placeholder="Doors">
              </div>         
                               
     </div><!--  row end div  -->

     <div class="row"> <!-- ROW STARTED-->>
        <div class="col-3">
            <label for="gw">ABS</label></br>
            <input type="radio" name="abs" value="yes">Yes</br>
            <input type="radio" name="abs" value="no" >No
        </br>
         </div>  
 
         <div class="col-3">
            <label for="gw">Power Steering</label></br>
            <input type="radio" name="pos" value="yes">Yes</br>
            <input type="radio" name="pos" value="no" >No
        </br>
         </div>
         <div class="col-3">
            <label for="gw">Power Window</label></br>
            <input type="radio" name="pow" value="yes">Yes</br>
            <input type="radio" name="pow" value="no" >No
        </br>
         </div> 
                
                           
 </div><!--  row end div  -->
 <div style="margin-top:2%;"  class="row"> <!-- ROW STARTED-->>
    <div class="col-3">
        <label for="gw">A/C</label></br>
        <input type="radio" name="ac" value="yes">Yes</br>
        <input type="radio" name="ac" value="no" >No
    </br>
     </div>  

     <div class="col-3">
        <label for="gw">Rear A/C vents</label></br>
        <input type="radio" name="rac" value="yes">Yes</br>
        <input type="radio" name="rac" value="no" >No
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
       <label for="gw">Cruise Control</label></br>
       <input type="radio" name="cruise" value="yes">Yes</br>
       <input type="radio" name="cruise" value="no" >No
    </br>
    </div>  

    <div class="col-3">
       <label for="gw">Rear Parking Sensor</label></br>
       <input type="radio" name="rps" value="yes">Yes</br>
       <input type="radio" name="rps" value="no" >No
    </br>
    </div>
    <div class="col-3">
       <label for="gw">Touchscreen Navigation System</label></br>
       <input type="radio" name="tsn" value="yes">Yes</br>
       <input type="radio" name="tsn" value="no" >No
    </br>
    </div> 
           
                      
</div><!--  row end div  -->


                                <div style="margin-top:2%;" class="col-3">
                                    <button type="submit" class="btn roberto-btn btn-3 mt-15">Post Comment</button>
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
