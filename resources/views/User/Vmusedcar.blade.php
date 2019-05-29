@if(session()->has('email'))

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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



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
                                    
         


          <div class="container" style="width:500px; height:300px;">
                  <h2>Used Car</h2>  
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                
                    <!-- Wrapper for slides -->
                    @isset($request)
         
                    @foreach($request as $cmp)
                    <div class="carousel-inner" style="height:300px;">
                      <div class="item active">
                        <img src="{{ asset('storage/'.$cmp->image1) }}" alt="image" style="width:100%;">
                      </div>
                
                      <div class="item">
                        <img src="{{ asset('storage/'.$cmp->image2) }}" alt="image" style="width:100%;">
                      </div>
                    
                      <div class="item">
                        <img src="{{ asset('storage/'.$cmp->image3) }}" alt="image" style="width:100%;">
                      </div>
                    </div>
                
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                    @endforeach
                    @endisset
                  </div>
                </div>
                                            
                <div style="margin-top:5%;">
                    
                </div>
                       
    
                <div style="container"> 

                    <table class="table">
                     @isset($request)
     
                     @foreach ($request as $cmp)
     
                     <tr>
                         <td><b><font size="4px"><i class="fa fa-car"></i>&nbsp;&nbsp;{{$cmp->make}}</font></b></td>
                         <td><b><font size="4px">Model: {{$cmp->model}}</td>
                         <td><b><font size="4px"><i class="	fa fa-dashboard"></i>Condition: {{$cmp->cond}}</td>
                         <td rowspan="3 "><b><font size="4px">{{$cmp->description}}</td>
                       </tr>
                      
                       <tr>
                         <td><b><font size="4px"><i class="fa fa-calendar"></i>Year: {{$cmp->year}}</td>
                         <td><b><font size="4px"><i class="fa fa-road"></i>KM runs: {{$cmp->km}}</td>
                         <td><b><font size="4px"><i class="fa fa-map-marker"></i>Location: {{$cmp->district}}</td>
                        
                       </tr>
                       <tr>
                           <td><b><font size="4px"> <i class="fa-gas-pump"></i> Fuel: {{$cmp->fuel}}</td>
                           <td><b><font size="4px"><i class="fa fa-rupee"></i> {{$cmp->price}}</td>
                          
                           <td><b><font size="4px"><a href="/buyucar/{{$cmp->usedcar_id}}"><button class="btn-primary" Value="Buy This Car"> Buy this Car</button></a></font></b></td>
                       </tr>
                      
                     @endforeach
                         
                     @endisset
                 </table> 
                      
               </div>
              </section>
      <!-- Call To Action Area Start -->
  
    <!-- Call To Action Area End -->

    <!-- Partner Area Start -->
    <div class="partner-area">
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

    <!-- Footer Area Start -->
@include('User.userfooter');
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
@endif
