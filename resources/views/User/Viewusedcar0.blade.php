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

            <div class="container">
                    <h2>Filter</h2>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Filter</button>
                  
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Filter</h4>
                          </div>
                          <div class="modal-body">
                            <form action="#">
                            
                            <select name="filtermodal" class="form-control">
                            <option>ms<option>
                            </select>
                            <input type="submit" value="submit">
                            
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    
                  </div>


    <center><div>

    <div class="tables">
					
					<div class="panel-body widget-shadow">
						<h5>List of Used Cars:</h4>
						
                        <div style="width:1000px; background-color:#f5f5ef; margin-top:2%;">
                        <table class="table">
                                @isset($request)
                               
                                @foreach($request as $cmp)
 
  <tr>
    <td>Make: {{$cmp->make}}</td>
    <td>Model: {{$cmp->model}}</td>
    <td rowspan="3" width="15%" height="10%"><img src='storage/{{$cmp->image1}}'></td>
  </tr>
  <tr>
        <td>Year: {{$cmp->year}}</td>
        <td>KM runs: {{$cmp->km}}</td>
  
  </tr>
  <tr><td><i class="fa fa-rupee"></i>{{$cmp->price}}</td><td><a href="usedcarmoredet/{{$cmp->usedcar_id}}"><b>More Details</b></a></td></tr>
  <tr>
      <td>&nbsp;</td>
    </tr>
  @endforeach
  @endisset
</table>
                        </div>

                       

					</div> 
</div>
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
