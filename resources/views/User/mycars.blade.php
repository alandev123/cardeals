
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
    <!-- Title -->
    <title>Car-Deals</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/logo1.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootrap.css">

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
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>


@include('User.userheader') 
<div style="margin-top:50px;">
  <center> <b> <h2>Request For Your Cars</h2></b> </center><br>
@isset($req)
<?php
if(count($req)!=0)
{
    echo" <center> <table class='table' style='width:98%;'>
            <tr>
<th>Ad Id</th>
<th>Image</th>
<th>Car Mode</th>
<th>Buyer Email</th>
<th>Buyer Contact Number</th>
<th>Buyer Message</th>
<th>Accept</th>
<th>Reject</th>

</tr>";
}
?>
@endisset
@foreach($req as $arr)

<tr>
<td>{{$arr->usedcar_id}}</td>
<td width="100px" hight="80px"><img src="storage/{{$arr->image1}}"></td>
<td>{{$arr->make}}&nbsp;{{$arr->model}}</td>
<td>{{$arr->email}}</td>
<td>{{$arr->phone}}</td>
<td width="250px">{{$arr->message}}</td>
<td><a href="/ucaraccept/{{$arr->usedcar_id}}"><font color="green"><i class="fa fa-check">Accept</i></a></font></td>
<td><a href="/ucarreject"><font color="red"><i class="fa fa-ban">Reject</i></a></font></td>

</tr>
</table>

@endforeach
</div>
   

           
<!-- Rooms Area End -->


    <!-- Call To Action Area Start -->
    <section class="roberto-cta-area">
       
    </section>
 
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
