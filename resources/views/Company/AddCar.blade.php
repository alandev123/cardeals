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
    <link rel="icon" href="./img/core-img/favicon.png">

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
    <!-- Header Area End -->

    <!-- Welcome Area Start -->

    <!-- Welcome Area End -->

    <!-- About Us Area Start -->
    <section class="roberto-about-area section-padding-100-0">
        <!-- Hotel Search Form Area -->

        <div class="hotel-search-form-area"  style="margin-top:8%;">
             <div class="container-fluid">
                 <div class="hotel-search-form">
                     <form method="POST" action="/caradd">

                     @csrf
                         <div class="row justify-content-between align-items-center">
                             <div class="col-6 col-md-2 col-lg-3">
                                 <label for="carname">Car Name</label>
                                 <input type="text" class="form-control" name="carname">
                                 <input type="hidden" name="hidemail" value="{{session('email')}}">
                                 @if(isset($success))
                                   {{$success}}
                                   @endif
                                   <button type="submit" class="form-control btn roberto-btn w-100">Add</button>
                                   
                            </div>

                        </div>
                      </form>
                  </div>
           </div>
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
@endif
