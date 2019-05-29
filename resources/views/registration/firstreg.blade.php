<!DOCTYPE html>
<html lang="en">

<head>


    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Car-Deals</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <div class="d-flex align-items-center" style="margin-top:1%;">
    <link rel="stylesheet" href="css/style1.css" type="text/css" media="all">
    <script src="js/valid.js"></script>

      <link rel="stylesheet" href="css/font-awesome1.min.css" type="text/css" media="all">


</head>

<body background='images/bmw3.jpg' repeat='no-repeat'>
  <div class="bottom-grid">
    <div class="logo">
      <!-- <h1> <a href="#"><span class="fa fa-key"></span> Key</a></h1> -->
    </div>
    <div class="links">
      <ul class="links-unordered-list">
       <li class="active">
         <a href="/" class="">Home</a>
         </li>
        <li class="active">
          <a href="/logincar" class="">Login</a>
        </li>
        <li class="">
          <a href="#" class="">About Us</a>
        </li>
        <li class="">
          <a href="/userregistration" class="">Register</a>
        </li>
        <li class="">
          <a href="#" class="">Contact</a>
        </li>
      </ul>
    </div>
  </div>
    <div class="page-wrapper p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration</h2>
                    @include('flash')
                    <form method="POST" action="{{route('regf.store')}}">
                      @csrf
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" id="name" name="name" required onblur="return n()">
                            <p id="namep" style="color:red; font-size:13px;"></p>
                        </div>
											<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="STATE" id="state" name="state" onkeyup="this.value = this.value.toUpperCase();" required >
                                    <p id="statep" style="color:red; font-size:13px;"></p>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="DISTRICT" id="district" name="district" onkeyup="this.value = this.value.toUpperCase();" required>
                                    <p id="disp" style="color:red; font-size:13px;"></p>
                                </div>
                            </div>

                        </div>


                        <div class="row row-space">
                            <div class="col-2">

							<div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="CITY" id="city" name="city" required onkeyup="this.value = this.value.toUpperCase();" oninput="this.reportValidity()">
                                    <p id="cityp" style="color:red; font-size:13px;"></p>
                                </div>


                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="PHONE NUMBER" id="phone" name="phone" required pattern="[6-9][0-9]{9}" onchange="p()" oninput="this.reportValidity()">
                                    <p id="phonep" style="color:red; font-size:13px;"></p>
                                </div>
                            </div>
                                                    </div>


					
                                <div class="input-group">
                                    <input class="input--style-1" type="email" placeholder="EMAIL" id="email" name="email" onchange="em()" oninput="this.reportValidity" onkeyup="this.value = this.value.toLowerCase();" required>
                                    
                                </div>
                           

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="password" placeholder="PASSWORD" id="password" name="password" onchange="ps()" oninput="this.reportValidity()" required>
                                    <p id="passp" style="color:red; font-size:13px;"></p>
                                </div>
                            </div>


                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="password" placeholder="CONFIRM PASSWORD" id="password_confirm" oninput="check(this)" name="cpass" required>
                                    <p id="passp1" style="color:red; font-size:13px;"></p>
                                    <input type="hidden" name="status" id='status' value="active" required>
                                </div>
                            </div>
                            <script language='javascript' type='text/javascript'>
                            function check(input) 
                            {
                                if(input.value != document.getElementById('password').value)
                                {
                                    input.setCustomValidity('Passwords are not Matching');
                                }
                                else{
                                    input.setCustomValidity('');
                                }

                            } 
                            </script>
                        </div>
                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">REGISTER</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
