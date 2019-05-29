
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


@include('head') 


    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
    <center><h2 style="margin-top:5%;">Used Car Section</h2><div style="margin-top:3%; background-color:#c2d6d6; width:500px; height:150px;">
    </div>
   <div style="background-color:#c2d6d6; width:500px; height:200px;">
    Sell Car &nbsp;&nbsp;<a href="/usellcar" class="fa fa-plus" style="font-size:35px;"></a> &nbsp;&nbsp;&nbsp;&nbsp; Search Car &nbsp;&nbsp;<a href="/vucar" class="fa fa-search" style="font-size:35px;"></a>
    
    </div></center>
                              
<div style="margin-top:10%;">

    
</div>
       
    </section>

    <!-- Call To Action Area Start -->
    <section class="roberto-cta-area">
       
    </section>
    <!-- Call To Action Area End -->

    <!-- Partner Area Start -->
    
    <!-- Partner Area End -->

    <!-- Footer Area Start -->
@include('foot')
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

