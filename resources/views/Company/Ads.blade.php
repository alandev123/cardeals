@if(session()->has('email'))

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  
  

    <!-- Title -->
    <title>Car-Deals</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('./img/core-img/favicon.png')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style.css')}}">

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
    <center><h3>Fill Details About Your Upcoming Cars</h3></center>
    <!-- Welcome Area Start -->

    <!-- Welcome Area End -->

    <!-- About Us Area Start -->
    <section class="roberto-about-area section-padding-100-0">
        <!-- Hotel Search Form Area -->
      
        <div>
             <div >
                 <div >
                    
                     <form method="POST" action="/addad" enctype="multipart/form-data">
                     @csrf
                          <div class="row">
                             <div class="col-12"> 
                             <div class="row">
                                 <div class="col-3">
                                 <label for="carname">Model Name</label>
                                 <input type="text" class="form-control" name="carname" style="height:40px;" required>
                                 </div>
                                 <div class="col-3">
                                 <label for="carname">Image</label>
                                <input type="file" name="image" class="form-control" style="height:40px;" required>
                            </div>
                            <div class="col-3">
                                <label for="carname">Expected Price</label>
                                <input type="number" name="price" class="form-control" style="height:40px;" placeholder="In Lakh" required>
                            </div>
                            <div class="col-3">
                                    <label for="carname">Tag Line</label>
                                    <input type="text" name="tag" class="form-control" style="height:40px;" placeholder="3 or 4 Words" required>
                                </div>
                            <div class="col-3" style="margin-top:45px;">
                                    <label for="carname">Expected Launch Date</label>
                                    <input class="date form-control" type="text" name="date" style="height:40px;" required>
                                </div>
                                <script type="text/javascript">

                                    $('.date').datepicker({  
                                
                                       format: 'dd-mm-yyyy'
                                
                                     });  
                                
                                </script>
                                
                                <div class="col-3" style="margin-top:45px;">
                                    <label for="carname">Bhp</label>
                                    <input class="form-control" type="text" name="bhp" style="height:40px;" required>
                                </div>
                                <div class="col-3" style="margin-top:45px;">
                                    <label for="carname">Expected Milage</label>
                                    <input class="form-control" type="number" name="milage" style="height:40px;" required>
                                </div>
                                <div class="col-3" style="margin-top:45px;">
                                    <label for="carname">No. of Varients</label>
                                    <input class="form-control" type="number" name="varient" style="height:40px;" required>
                                </div>
                                <div class="col-3" style="margin-top:45px;">
                                    <label for="carname">Fuel Type</label><br>
                                    <select name="fuel" style="height:40px;" required>
                                        <option disabled="disabled" selected="selected">Select Fuel Type</option>
                                        @foreach ($request as $item)
                                    <option value="{{$item->fuelid}}">{{$item->fuelt}}</option>   
                                        @endforeach
                                        </select>
                                </div>
                                <div class="col-3" style="margin-top:45px;">
                                    <label for="carname">Transmission</label><br>
                                    <select name="trans" style="height:40px; width:250px;" required>
                                        <option disabled="disabled" selected="selected">Select Transmission Type</option>
                                        <option value="Manual">Manual</option>
                                        <option value="Automatic">Automatic</option>
                                        <option value="Manual & Automatic">Both</option>
                                    </select>
                                </div>
                                
                             </div> 
                             <div class="col-3" style="margin-top: 15px;">
                                    <button type="submit" class="form-control btn roberto-btn w-100">Add</button>
                                 </div>      
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
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End -->









    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <!-- Popper -->
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- All Plugins -->
    <script src="{{ asset('js/roberto.bundle.js')}}"></script>
    <!-- Active -->
    <script src="{{ asset('js/default-assets/active.js')}}"></script>

</body>

</html>
@endif
