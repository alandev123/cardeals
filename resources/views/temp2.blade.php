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
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
   
</head>

<body style="background-color:#f5f5ef;">
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Search Form -->
        <div class="search-form d-flex align-items-center">
            <div class="container">
                <form action="/" method="get">
                    <input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
            </div>
        </div>

        <!-- Header Area Start -->

        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="/"><img src="./img/core-img/logo2.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="/">Home</a></li>
                                    <li><a href="/rviewcar">Cars</a></li>
                                    <li><a href="/aboutus">About Us</a></li>
                                    <li><a href="uusedcarhome">Usedcar</a></li>
                                    <li><a href="/logincar">Login</a></li>
                                </ul>

                                <!-- Search -->
                                <div class="search-btn ml-4">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                           
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <section class="roberto-cta-area">
  <div>
        <div>
                @foreach($ads as $t)
            <div class="container" style="margin-top:5%;">
            <center><h1><i><u><b>{{$t->tag}}</b></u></i></h1></center>
                <table class="table">
                    <tr>
                        <td rowspan="9">
                                <img src="/storage/{{$t->image}}">
                 {{-- <div class="cta-content bg-img" style="background-image: {{url('/storage/{{$t->image}}'); height:300px; width:600px">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-7"> 
                             <div class="cta-text mb-50">
                                <h6>{{$t->name}}&nbsp;&nbsp;{{$t->model}}</h6>
                                <h6>Launch on {{$t->date}}</h6>
                                <h6>Price Starts from ₹&nbsp;{{$t->price}} Lakh</h6>
                            </div> 
                           
                        </div>
                        <div class="col-8 col-md-11 text-down8-654">
                           
                            <h4><font color="white">{{$t->tag}}</font></h4>
                        </div>
                    </div>
                </div>  --}}
            </td>
        </tr>
        <tr>
                <td>
                    <h3>Make: &nbsp; {{$t->name}}</h3>
                </td>
                </tr>
        <tr>
                <td>
                    <h3>Model: &nbsp;{{$t->model}}</h3>
                </td>
            </tr>

            <tr>
            <td>
                <h3>Launch on: &nbsp; {{$t->date}}</h3>
            </td>
            </tr>

            <tr>
            <td>
                <h3>BHP: &nbsp; {{$t->bhp}}</h3>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Expected Mileage: &nbsp; {{$t->milage}}&nbsp;KMPL*</h3>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Varients Available: &nbsp; {{$t->varient}}</h3>   
            </td>
        </tr>
        <tr>
            <td>
                <h3>Fuel Type: &nbsp; {{$t->fuelt}}</h3>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Transmission Type: &nbsp; {{$t->trans}}</h3>
            </td>
            </tr>
            <tr>

          <td>
           <h3>* Subjects may change at the time of launch</h3>
             
           </td>
             <td>
               <h3>Expected Price: &nbsp;<li class="fa fa-rupee"> </li>&nbsp;{{$t->price}}&nbsp;Lakhs*</h3>

               </td>
             </tr>
            </div>
            @endforeach
        </div>
  </div>
        </section>


  
  

   

    <!-- Call To Action Area Start -->
    <section >

    </section>


    <br>
    <br>

    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End -->

    <!-- Footer Area Start -->
   
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Popper -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- All Plugins -->
    <script src="{{asset('js/roberto.bundle.js')}}"></script>
    <!-- Active -->
    <script src="{{asset('js/default-assets/active.js')}}"></script>

</body>

</html>
