@if(session()->has('email'))

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Car-Deals</title>
    {{-- <script src="js/jquery.min.js"></script> --}}

    <script src="js/varientview.js"></script>
    <link rel="icon" href="./img/core-img/favicon.png">


    <link rel="stylesheet" href="style.css">

</head>

<body>
  
    <div id="preloader">
        <div class="loader"></div>
    </div>
    @include('Company.companyheader');
    <section class="roberto-about-area section-padding-100-0">
       
        <div class="hotel-search-form-area"  style="margin-top:8%;">
             <div class="container-fluid">
                 <div class="hotel-search-form">
                 <form method="POST" action="#" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                          <div class="col-3">
                                         <label>Select Model</label>
                        <select name="modelname" id="modelname" class="form-control">
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
                             <select name="varient" id="varient" class="form-control">
                                <option>Select</option>
                             </select>
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









    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <!-- Popper -->
    {{-- <script src="js/popper.min.js"></script> --}}
    <!-- Bootstrap -->
    {{-- <script src="js/bootstrap.min.js"></script> --}}
    <!-- All Plugins -->
    <script src="js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>
@endif
