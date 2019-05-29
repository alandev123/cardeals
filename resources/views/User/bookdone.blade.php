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
<form action="/postbook" method="POST">
    @csrf
    <div style="margin-top:4%;margin-left:2%;">
Select Nearest District<br>
<br>

<select name="district" id="district" class="form-control">
        <option disabled> select </option>
        @foreach ($a as $item)


<option value="{{$item->district}}">{{$item->district}}</option>

<input type="hidden" value={{$item->manid}} name="manid">
@endforeach
</select>
<input type="hidden" value={{$model}} name="model">  
@foreach ($b as $it)
 
<input type="hidden" value="{{$it->varient}}" name="varient">
@endforeach
<br>
<br>
<br>
<input type="submit" value="Book">
</div>
</form>

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