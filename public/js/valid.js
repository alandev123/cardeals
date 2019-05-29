function n(){
	
	var valname= /^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$/ ;
	$name= document.getElementById('name').value;
	document.getElementById('namep').innerHTML='';
	if(!valname.test($name)){
     
      
	   document.getElementById('namep').innerHTML='Enter a valid name';
	   $("#name").focus();
      return false;
    }
	
}
function city(){
	
	var valname1= /^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$/ ;
	$city= document.getElementById('city').value;
	document.getElementById('cityp').innerHTML='';
	if(!valname1.test($city)){
     
      
	   document.getElementById('cityp').innerHTML='Enter a valid State';
	   $("#city").focus();
      return false;
    }
	
}
function dis(){
	
	var valname2= /^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$/ ;
	$dis= document.getElementById('dis').value;
	document.getElementById('disp').innerHTML='';
	if(!valname2.test($dis)){
     
      
	   document.getElementById('disp').innerHTML='Enter a valid District';
	   $("#dis").focus();
      return false;
    }
	
}
function state(){
	
	var valname3= /^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$/ ;
	$state= document.getElementById('state').value;
	document.getElementById('statep').innerHTML='';
	if(!valname3.test($state)){
     
      
	   document.getElementById('statep').innerHTML='Enter a valid State';
	   $("#state").focus();
      return false;
    }
	
}



function p(){
  var val_phone=  /^[0-9]{9,12}$/;
  $phone= document.getElementById('phone').value;
  
  if(!val_phone.test($phone)){
    alert("Enter Valid phone number");
    document.getElementById('phonep').value='';
     $("#phone").focus();
     return false;
   }
}


function u(){
  var val_username= /^[A-Za-z][A-Za-z0-9]{3,20}$/;
  $username= document.getElementById('username').value;


  if(!val_username.test($username)){
     alert("Enter valid Username");
     document.getElementById('username').value='';
     $("#username").focus();
     return false;
     
   }
}



function password(){
  var val_password=  /^[A-Za-z]\w{5,14}$/;
  $password= document.getElementById('password').value;
  document.getElementById('passp').innerHTML='';
  if(!val_password.test($password)){
     
     document.getElementById('password').innerHTML='Enter a Valid password. first letter mustbe a letter';
     $("#password").focus();
     return false;
   }
}
function ps(){
  var val_password=  /^[A-Za-z]\w{5,14}$/;
  $password= document.getElementById('password').value;
  
  if(!val_password.test($password)){
     alert("Atleast 6 characters needed first charecter must be a letter");
     document.getElementById('password').value='';
     $("#password").focus();
     return false;
   }
}




function em(){
  var val_email=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  $email= document.getElementById('email').value;
 
  if(!val_email.test($email)){
     alert("enter a valid Email ID")
     document.getElementById('email').value='';
     $("#email").focus();
     return false;
   }
}





function ct(){
  var val_contact= /^[0-9]{9,12}$/;
  $contact= document.getElementById('contact').value;


  if(!val_contact.test($contact)){
     alert("enter valid phoneno ");
     document.getElementById('contact').value='';
     $("#contact").focus();
     return false;
   }
}





function cd(){
  var val_card= /^(?:5[1-5][0-9]{14})$/;
  $card= document.getElementById('card').value;


  if(!val_card.test($card)){
     alert("enter valid card ");
     document.getElementById('card').value='';
     $("#card").focus();
     return false;
   }
}





function cv(){
  var val_cvv= /^[0-9]{3,4}$/;
  $cvv= document.getElementById('cvv').value;


  if(!val_cvv.test($cvv)){
     alert("enter valid cvv ");
     document.getElementById('cvv').value='';
     $("#cvv").focus();
     return false;
   }

   function cin(){
    var val_cin=  /^([L|U]{1})([0-9]{5})([A-Za-z]{2})([0-9]{4})([A-Za-z]{3})([0-9]{6})$/;
    $cin= document.getElementById('cin').value;
    
    if(!val_cin.test($cin)){
       alert("Enter Correct CIN number");
       document.getElementById('cin').value='';
       $("#cin").focus();
       return false;
     }
  }
  
   
}