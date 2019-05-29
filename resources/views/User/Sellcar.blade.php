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

    <script>
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
      </script>
<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style2.css" rel='stylesheet' type='text/css' media="all">

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/logo1.png">
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
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
    <center><div class="container">
        <div class="row">
          <div class="col-sm">
            One of three columns
          </div>
          <div class="col-sm">
            One of three columns
          </div>
          <div class="col-sm">
            One of three columns
          </div>
        </div>
      </div><div style="margin-top:1%;">
         <form  method="post" action="/sellcaradd" enctype="multipart/form-data">
         @csrf
                 <div class="wrap-custom-file">
                        <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png" />
                        <label  for="image1">
                        <!-- <span><img class="image-fluid"></span> -->
                        <span class="fas fa-camera-retro"></span>
                        </label>
                </div>
                <div class="wrap-custom-file">
                        <input type="file" name="image2" id="image2" accept=".gif, .jpg, .png" />
                        <label  for="image2">
                        <!-- <span><img class="image-fluid"></span> -->
                        <span class="fas fa-camera-retro"></span>
                        </label>
                </div>
                <div class="wrap-custom-file">
                        <input type="file" name="image3" id="image3" accept=".gif, .jpg, .png" />
                        <label  for="image3">
                        <!-- <span><img class="image-fluid"></span> -->
                         <span class="fas fa-upload"></span>
                        </label>
                </div></br></center>
</div>             
<center> <div style="width:300px; margin-top:1%;">
               <div>                    
        Make<br> <select name="make" required>
             <option>&nbsp;&nbsp;&nbsp;&nbsp;Select Make&nbsp;&nbsp;&nbsp;&nbsp;</option>
                    <option>Ford</option>
                    <option>Maruti Suzuki</option>
                    <option>BMW</option>
                    <option>Benz</option>
                    <option>Hyundai</option>
                </select>
           </div>
           <br>
           <br>
       <div>
         <br>
        Model  <br>  <input type="text" class="form-control" name="model" placeholder="Model Name" required>
        </div>
          <br>
         <div>
         Condition  <br>  <select name="cond" required>
            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---Select---&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                   <option>Showroom Conditoin</option>
                   <option>Excellent</option>
                   <option>Good</option>
                   <option>Not Bad</option>
                   <option>Bad</option>
                   <option>Worst</option>
               </select>
         </div>
        <br>
         <div>
           <br>
           <br>
        Registration Year  <br>  <select name="year" required>
            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---Select---&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                   <option>1999</option>
                   <option>2000</option>
                   <option>2001</option>
                   <option>2003</option>
                   <option>2004</option>
                   <option>2005</option>
                   <option>2006</option>
                   <option>2007</option>
                   <option>2008</option>
                   <option>2009</option>
                   <option>2010</option>
                   <option>2011</option>
                   <option>2012</option>
                   <option>2013</option>
                   <option>2014</option>
                   <option>2015</option>
                   <option>2016</option>
                   <option>2017</option>
                   <option>2018</option>
                   <option>2019</option>
               </select>
        </div>
          <br>
                
            <div>
              <br>
              <br>
                KM Driven<br>
                  <input type="number" class="form-control" name="km" placeholder="KM Driven" required>
              </div>
              <div>
                  <br>
                  Fuel type  <br>  <select name="fuel" required>
                      <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---Select---&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                             <option>Petrol</option>
                             <option>Diesel</option>
                             <option>LPG</option>
                             <option>CNG</option>
                            </select>
                  </div>
                  <br>
              <div>
               
                <br>
             State  <br>  <select name="state" required>
                 <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---Select---&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                        <option>Kerala</option>
                        
                       </select>
             </div>
             <div>
              <br>
              <br>
              <br>
           District  <br>  <select name="district" required>
               <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---Select---&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                      <option>Kazargod</option>
                      <option>Kannur</option>
                      <option>Waynad</option>
                      <option>Calicut</option>
                      <option>Malappuram</option>
                      <option>Palakkad</option>
                      <option>Thrissur</option>
                      <option>Ernakulam</option>
                      <option>Alappuzha</option>
                      <option>Idukki</option>
                      <option>Kottayam</option>
                      <option>Pathanamthitta</option>
                      <option>Kollam</option>
                      <option>Trivandrum</option>
                      
                      </select>
                      <br>
           </div>
           <div>
           <br>
           Dscription<br>
           <textarea name="description" id="description" cols="35" rows="6" placeholder="Description if any"></textarea>
           </div>
         
              <div>
                  <br>
                  <br>
                    Expecting Price<br>
                      <input type="number" class="form-control" name="price" placeholder="Price" required>
                  </div>
           
           <div>
                
                  <br>
                  <input type="submit" value="Add" class="form-control" style="background-color:#ffe6cc;">
              </div>
         </div>
      </center>

    </form>
      
    </section>
<div style="margin-top:20%">
&nbsp;</div>

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
    <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <script>
         $('input[type="file"]').each(function(){
           // Refs
           var $file = $(this),
               $label = $file.next('label'),
               $labelText = $label.find('span'),
               labelDefault = $labelText.text();
         
           // When a new file is selected
           $file.on('change', function(event){
             var fileName = $file.val().split( '\\' ).pop(),
                 tmppath = URL.createObjectURL(event.target.files[0]);
             //Check successfully selection
             if( fileName ){
               $label
                 .addClass('file-ok')
                 .css('background-image', 'url(' + tmppath + ')');
               $labelText.text(fileName);
             }else{
               $label.removeClass('file-ok');
               $labelText.text(labelDefault);
             }
           });
         
         // End loop of file input elements
         });
      </script>

</body>

</html>
@endif