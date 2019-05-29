@if(session()->has('email'))

<!DOCTYPE html>
<html lang="en">
<!--{{session('email')}}
{{session('company_id')}}-->
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


@include('User.userheader') 


    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
       <form method="POST" action="advicereq">
       @csrf
       <div class="row">
       <div class="col-3" style="margin-top:3%; margin-left:2%;">
       @if(isset($success))
             {{$success}}
               @endif
                                     
       &nbsp;   &nbsp;  <label for="cartype">Budget</label><br/>
       &nbsp;   &nbsp; <select name="budget" id="budget" class="form-control">
                <option disabled="disabled" selected="selected">Select-Budget&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                <option>1000000 Above</option>
                <option>800000 - 1000000</option>
                <option>600000 - 800000</option>
                <option>400000 - 600000</option>  
                <option>200000 - 400000</option>                          
             </select> 
    </div>

    <div class="col-3" style="margin-top:3%; margin-left:2%;">
    <label>Transmission You prefer</label></br>
            <input type="radio" name="trans" value="Automatic">Automatic</br>
            <input type="radio" name="trans" value="Manual" >Manual
        </br>
        </div>
        <div class="col-3" style="margin-top:3%; margin-left:2%;">
    <label>Power or Milage</label></br>
            <input type="radio" name="porm" value="Power">Power</br>
            <input type="radio" name="porm" value="Milage" >Milage
        </br>
        </div>

        <div class="col-3" style="margin-top:3%; margin-left:2%;">
    <label>Fuel</label></br>
            <input type="radio" name="fuel" value="Petrol">Petrol</br>
            <input type="radio" name="fuel" value="Diesel" >Diesel
        </br>   
        </div>

        <div class="col-3" style="margin-top:3%; margin-left:2%;">
    <label>Build Quality or Cheap Spare parts</label></br>
            <input type="radio" name="build" value="Quality">Build Quality</br>
            <input type="radio" name="build" value="Spare" >Cheap Spare 
        </br>   
        </div>   
        <div class="col-3" style="margin-top:3%; margin-left:2%;">
    <label>Usage</label></br>
            <input type="radio" name="usage" value="OffRoad">Offroad</br>
            <input type="radio" name="usage" value="City" >City</br>
            <input type="radio" name="usage" value="Normal" >Normal
        </br>   
        </div> 
    </div>
    <div class="col-3">
    <button type="submit" class="form-control btn roberto-btn w-100">Request Advice</button>
     </div>                             
<div style="margin-top:20%;">
</div>
       </form>
    </section>

    <!-- Call To Action Area Start -->
    <section class="roberto-cta-area">
       
    </section>
    <!-- Call To Action Area End -->

    <!-- Partner Area Start -->
    
    <!-- Partner Area End -->

    <!-- Footer Area Start -->
@include('User.userfooter');
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
@endif
