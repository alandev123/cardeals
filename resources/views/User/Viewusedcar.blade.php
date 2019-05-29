
@if(session()->has('email'))

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    
    <link href="css/custom.css" rel="stylesheet">

    <title>Car-Deals</title>

   
    <link rel="icon" href="./img/core-img/logo1.png">

  
    <link rel="stylesheet" href="style.css">

    <style>
                
            .zoom {
              padding: 30px;
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

<body>
    
    <div id="preloader">
        <div class="loader"></div>
    </div>


@include('User.userheader') 


            <section class="roberto-cta-area">
                    <br/>
                    <div class="form-group" style="width:200px; margin-left:10px;">
                            <a href="/pricel"><button type="button" class="btn roberto-btn w-100">Price Low to high</button></a> 
                        </div>
                        <div class="form-group" style="width:200px; margin-left:10px; position: relative;">
                            <a href="/priceh"><button type="button" class="btn roberto-btn w-100">Price high to low</button></a>
                        </div>
                    <center><h3>Available Cars</h3></center>
                    <div class="row" style="margin-top:5%;">
                    @isset($request)
                        @foreach($request as $cmp)
                       
            
                        <div class="col-4">
                        <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                                
                                
                                <div class="room-thumbnail">
                                    <img src='storage/{{$cmp->image1}}' alt="" class="zoom">
                                </div>
                                
                                <div class="room-content">
                                        <h3>Model:{{$cmp->model}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                                        <h4 style="font-size:20px;"><i class="fa fa-rupee"></i> &nbsp;{{$cmp->price}} <span>/-</span></h4>
                                        <div class="room-feature">
                                            <h6 style="font-size:18px;">Year: <span>{{$cmp->year}}</span></h6>
                                            <h6 style="font-size:18px;">KM Runs: <span>{{$cmp->km}}</span></h6>
                                            <h6 style="font-size:18px;">Make: <span>{{$cmp->make}}</span></h6>
                                            <h6 style="font-size:18px;">District: <span>{{$cmp->district}}</span></h6>
                                        </div>
                                        <a href="usedcarmoredet/{{$cmp->usedcar_id}}" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                
                            </div>
                        </div>
                  
            @endforeach
            @endisset
            </div>
            <nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">
                    <ul class="pagination">
                       {{$request->links()}}
                    </ul>
                </nav>
                    
                        
             </section>

    <section class="roberto-cta-area">
       
    </section>
 
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
