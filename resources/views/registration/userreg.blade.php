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


      <link rel="stylesheet" href="css/font-awesome1.min.css" type="text/css" media="all">


</head>

<body background='images/bmw3.jpg' repeat='no-repeat'>
  <div class="bottom-grid">
    <div class="logo">
      <h1> <a href="#"><span class="fa fa-key"></span> Key</a></h1>
    </div>
    <div class="links">
      <ul class="links-unordered-list">
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
                    <form method="POST" action="{{route('ureg.store')}}">
                      @csrf
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="name" required>

                        </div>

					<!-- <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="NAME" name="name">
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="CITY" name="city" required>
                                </div>
                            </div>

                        </div> -->

											<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="STATE" name="state" required>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="DISTRICT" name="district" required>
                                </div>
                            </div>

                        </div>


                        <div class="row row-space">
                            <div class="col-2">

							<div class="input-group">
                                    <input class="input--style-1" type="number" placeholder="AGE" name="age" required>
                                </div>

                               <!--  <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="DATE OF BIRTH" name="dob">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div> -->
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender" required>
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


					<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="EMAIL" name="email" required>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="number" placeholder="PHONE NUMBER" name="phone" required>
                                </div>
                            </div>

                        </div>


                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="password" placeholder="PASSWORD" name="password" required>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="password" placeholder="CONFIRM PASSWORD" name="cpass" required>
                                    <input type="hidden" name="status" id='status' value="active" required>
                                </div>
                            </div>

                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">REGISTER</button>
                        </div>
                    </form>
                    <br/>
                    <p> register as a <a href="/manufacturerreg">Manufacturer</a> or as a <a href="/dealerreg">Dealer</a></p>
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
