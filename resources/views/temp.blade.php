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
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <style>
                
        .zoom {
          padding: 50px;
         transition: transform .9s;
          margin: 0 auto;
        }
        
        .zoom:hover {
          -ms-transform: scale(1.5); /* IE 9 */
          -webkit-transform: scale(1.5); /* Safari 3-8 */
          transform: scale(1.5); 
        }
        </style>
</head>

<body style="background-color:#e0ebeb;">
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    @include('head');
    <!-- Header Area End -->

    <section class="welcome-area">
            <div class="welcome-slides owl-carousel">
                <!-- Single Welcome Slide -->
                @foreach($req as $abc)
                <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(storage/{{$abc->image}});" data-img-url="storage/{{$abc->image}}">
                    <!-- Welcome Content -->
                    <div class="welcome-content h-100">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <!-- Welcome Text -->
                                <div class="col-12">
                                    <div class="welcome-text text-center">
                                            <h6 data-animation="fadeInLeft" data-delay="100ms">Editors Choice</h6>
                                    <h6 data-animation="fadeInRight" data-delay="450ms">{{$abc->make}}&nbsp;&nbsp; {{$abc->model}}</h6>
                                        <!-- <h2 data-animation="fadeInLeft" data-delay="500ms">Welcome To Car-Deals</h2> -->
                                        <!-- <a href="#" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Discover Now</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
    
                <!-- Single Welcome Slide -->
                
            </div>
        </section>


<div>
    <!-- Call To Action Area Start -->
    <section class="roberto-cta-area">
        <br/>
        <center><h3>Upcoming Cars</h3></center>
        <div class="row" style="margin-top:5%;">
        @isset($request)
            @foreach($request as $cmp)
           

            <div class="col-6">
            <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                    
                    <!-- Room Thumbnail -->
                    <div class="room-thumbnail">
                        <img src='storage/{{$cmp->image}}' alt="" class="zoom">
                    </div>
                    <!-- Room Content -->
                    <div class="room-content">
                        <h3>{{$cmp->name}}&nbsp;-&nbsp;{{$cmp->model}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                        <h4 style="font-size:20px;">{{$cmp->tag}}</h4>
                        <div class="room-feature">
                             <h6 style="font-size:18px;">Launch On: <span>{{$cmp->date}}</span></h6>
                            <h6 style="font-size:18px;">Expected Mileage: <span>{{$cmp->milage}}&nbsp;KMPL*</span></h6>
                            <h6 style="font-size:18px;">BHP: <span>{{$cmp->bhp}}</span></h6>
                            <h6 style="font-size:18px;">Expected Price: <span><i class="fa fa-rupee"></i> &nbsp;{{$cmp->price}} Lakh*</span></h6>
                        </div>
                        <a href="/moread/{{$cmp->adid}}" class="btn view-detail-btn">More Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    
                </div>
            </div>
      
@endforeach
@endisset
</div>

        
            
    </section>
</div>


    <br>
    <br>
    <!-- Call To Action Area End -->

    <!-- Partner Area Start -->
 
   
    <!-- Partner Area Start -->
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
