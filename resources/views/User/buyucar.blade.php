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
       <form method="POST" action="/msgucar">
       @csrf
       @foreach($ccn as $c)
       <div class="row" style="margin-left: 10px; margin-top: 20px;">
           <div class="col-4">
         <input type="hidden" value="{{$c->email}}" class="form-control">
           Ad Id <input type="text" value="{{$c->usedcar_id}}" class="form-control" style="width:250px;" name='usedcar_id' readonly></br>
           Car <input type="text" value="{{$c->make}}&nbsp;{{$c->model}}" class="form-control" style="width:250px;" readonly></br>
           Price <input type="text" value="{{$c->price}}" class="form-control" style="width:250px;" readonly></br>
           Message<textarea class="form-control" name="message" required></textarea><br>
           <input type="submit" value="Post Booking" name="submit" class="btn roberto-btn w-10">
           </div>
           <div class="col-4">
           <img src="/storage/{{$c->image1}}" alt="{{$c->image1}}" width="500px" height="300px">
           </div>

       </div>
       @endforeach
       </form>
    </section>
    <div style="margin-top: 20%"></div>

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
