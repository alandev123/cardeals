<!-- @include('Company.companyheader'); -->
@if(session()->has('email'))
   <!DOCTYPE html>
<html lang="en">
   <head>
      <title>Profile</title>
      <!-- Meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Solo Profile Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
         />
      <script>
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
      </script>
      <!-- Meta tags -->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="css/style2.css" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
      <div style="margin-top:1%;">
      <center><a href="/companyhome"><h2>HOME</h2></a></center>
      </div>
   </head>
   <body>
      <h1 class="header-w3ls">
         Company Profile
      </h1>
      <div class="mid-cls">
         <form method="POST" action="#">
         @csrf
         
         @foreach($request as $cmp)
            <div class="main">
               <div class="icon-head-wthree">
                  <div class="images-headder">
                     <div class="wrap-custom-file">
                        <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png" />
                        <label  for="image1">
                        <span><img src="./img/core-img/logo2.png" alt="" class="image-fluid"></span>
                        <span class="fas fa-camera-retro"></span>
                        </label>
                     </div>
                  </div>
                  <div>
                     <p>Company Logo</p>
                     </div>
               </div>
            
                
               <div class="form-left-to-w3l">
               <label>CIN Number</label>
                  <input type="text" name="cin" value='{{$cmp->cin}}' disabled>
                  <div class="clear"></div>
               </div>
               <div class="form-left-to-w3l">
               <label>Email</label>
                  <input type="text" name="email" value='{{$cmp->email}}' disabled>
                  <div class="clear"></div>
               </div>
               <div class="form-left-w3l">
               <label>Head Office</label>
                  <input type="text" name="headoffice" value='{{$cmp->headoffice}}' disabled>
               </div>
               <div class="form-right-w3ls ">
               <label>Website</label>
                  <input type="text" name="website" value='{{$cmp->website}}' disabled>
                  <div class="clear"></div>
               </div>
               <div class="form-right-w3ls ">
               <label>Established Year</label>
                  <input type="text" name="year" value='{{$cmp->year}}' disabled>
                  <div class="clear"></div>
               </div>
               
               <div class="btnn">
                  <button type="submit">More Details</button><br>
                  <div class="clear"></div>
               </div>
            </div>
            
            @endforeach
         </form>
      </div>
      <div class="copy">
         <!-- <p>&copy;2018 Solo profile Form. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p> -->
      </div>
      <!--js working-->
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