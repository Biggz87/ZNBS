function contactus(){
	var sender= document.getElementById("email").innerHTML;
	var name= document.getElementById("name").innerHTML;
		var reciever= "customer@trolley.co.zm";
			var message= document.getElementById("message").innerHTML + '<br> From '+ name;
				var subject= document.getElementById("subject").innerHTML;
					
	sendmessage(sender,reciever,message,subject);
	
}

function sendEnquiry(){
	var message= document.getElementById("message").innerHTML;
		var reciever= document.getElementById("branch_1 ").innerHTML;
			
			var sender= document.getElementById("email").value;
				var subject= document.getElementById("Subject").value;
				var PhoneNumber= document.getElementById("Number").value;
				var Name= document.getElementById("Name").value;
				
	sendmessage(sender,reciever,message,subject,PhoneNumber,Name);
}
function sendComplaint(){
	var message= document.getElementById("message1").innerHTML;
		var reciever= 'customerservice@znbs.co.zm';
			
			var sender= document.getElementById("email1").value;
				var subject= document.getElementById("Subject1").value;
				var PhoneNumber= document.getElementById("Number1").value;
				var Name= document.getElementById("Name1").value;
				
	sendmessage(sender,reciever,message,subject,PhoneNumber,Name);
}

function sendComplaintM(){
	var message= document.getElementById("message1M").innerHTML;
		var reciever= 'customerservice@znbs.co.zm';
			
			var sender= document.getElementById("email1M").value;
				var subject= document.getElementById("Subject1M").value;
				var PhoneNumber= document.getElementById("Number1M").value;
				var Name= document.getElementById("Name1M").value;
				
	sendmessage(sender,reciever,message,subject,PhoneNumber,Name);
}
function sendmessage(senderaddress,recieveraddress,message,subject,PhoneNumber,Name){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	
	$.ajax({
       type: 'POST',
       url: 'actions/sendmessage.php',
	   data: 'sender='+senderaddress+'&reciever='+recieveraddress+'&message='+message+'&subject='+subject+'&Name='+Name+'&PhoneNumber='+PhoneNumber,
       success:  function(data)
       {
		   if(data.trim()=='success'){
			document.getElementById("ResponseMesage").innerHTML='<div class="alert alert-success">Your Message has been sent successfully. <br>We will get back to you soonest.Thank you !</div>';
			document.getElementById("ResponseComplaints").innerHTML='<div class="alert alert-success">Your Message has been sent successfully. <br>We will get back to you soonest.Thank you !</div>';
			document.getElementById("ResponseComplaintsM").innerHTML='<div class="alert alert-success">Your Message has been sent successfully. <br>We will get back to you soonest.Thank you !</div>';
		   }
		   
		   else{
			  
			document.getElementById("ResponseMesage").innerHTML='<div class="alert alert-danger">'+data+'</div>';
			document.getElementById("ResponseComplaints").innerHTML='<div class="alert alert-danger">'+data+'</div>';
			document.getElementById("ResponseComplaintsM").innerHTML='<div class="alert alert-danger">'+data+'</div>';
            			
		   }
        //console.log(data);
		
       }
   });
}

function newslettersub(email,no_reponseid,yes_response){
var subemail=email;
	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	if(email==''){
		subemail=document.getElementById('some_email').value;
	}
	
	$.ajax({
       type: 'POST',
       url: 'do_newsletter_sub.php',
	   data: 'emaildata='+subemail,
       success:  function(data)
       {
		   if(data.trim()=='success'){
			 document.getElementById(yes_response).innerHTML='<div class="alert alert-success">You have successfully subscribed to our Weekly Newsletter</div>';	
		   }
		   
		   else{
			  
			document.getElementById(no_reponseid).innerHTML='<div class="alert alert-danger">'+data+'</div>';	
		   }
        //console.log(data);
		
       }
   });
}

function verifyforgot(){
	

	var emaildata =document.getElementById("submittedEmail").value;
	
	console.log(emaildata);
	$.ajax({
       type: 'POST',
       url: 'forgot_veryfy.php',
	   data: 'emaildata='+emaildata,
       success:  function(data)
       {
		   if(data.trim()=='success'){
		
			  console.log(data);
			  document.getElementById("form2").innerHTML='<div class=""> <p><font color="Green">We Have sent a Verification Pin To Your Email, Please enter it below to continue</font></p><input type="text" name="name" id="pin" placeholder="Your Pin number here" required></div><div id="form2"><div class=""><a type="submit" name="submit" value="Submit" onclick="verifypin()" class="button2">Submit</a></div>'
		   document.getElementById("ResponseMesage").innerHTML=""
		   }
		   
		   else{
			  console.log(data);
			document.getElementById("ResponseMesage").innerHTML='<div class="alert alert-danger">'+data+'</div>';	
		   }
        //console.log(data);
		
       }
   });
	
}

function verifyAccount(){
	

	var emaildata =document.getElementById("submittedEmail").value;
	
	console.log(emaildata);
	$.ajax({
       type: 'POST',
       url: 'do_verifyAccount.php',
	   data: 'emaildata='+emaildata,
       success:  function(data)
       {
		   if(data.trim()=='success'){
		window.open('Accountverication2.php');
		   }
		   
		   else{
			  console.log(data);
			document.getElementById("ResponseMesage").innerHTML='<div class="alert alert-danger">'+data+'</div>';	
		   }
        //console.log(data);
		
       }
   });
	
}
function verifypin(){
	
	var pin= document.getElementById("pin").value;
	var email =document.getElementById("submittedEmail").value;
	
	$.ajax({
       type: 'POST',
       url: 'verifypin2.php',
	   data: 'emaildata='+email+'&pin='+pin,
       success:  function(data)
       {
		   if(data.trim()=='success'){
			
			  document.getElementById("ResponseMesage").innerHTML="";
			  document.getElementById("form2").innerHTML=' <div class=""><p>Enter A new password below<p> <input type="password"  style="width:450px" name="password1" id="password1" placeholder="Password here" required></div><div class=""><br><input style="width:450px" type="password" name="password2"  id="password2" placeholder="Re-enter Password Here" required></div><div id="form2"><div class=""><input type="submit" name="submit" value="Submit" onclick="passchange()" class="button2" value="Submit"></div>'
		   }
		   
		   else{
			  
			document.getElementById("ResponseMesage").innerHTML='<div class="alert alert-danger">'+data+'</div>';	
		   }
        //console.log(data);
		
       }
   });
}
function verifypin2(){
	
	var pin= document.getElementById("pin").value;
	 var email =document.getElementById("submittedEmail").value;
	console.log(email);
	$.ajax({
       type: 'POST',
       url: 'verifypin.php',
	   data: 'emaildata='+email+'&pin='+pin,
       success:  function(data)
       {
		   if(data.trim()=='success'){
			
			window.open('accountVerifiedconfirm.php');
 
		   }
		   
		   else{
			  
			document.getElementById("ResponseMesage").innerHTML='<div class="alert alert-danger">'+data+'</div>';	
		   }
        //console.log(data);
		
       }
   });
}

  function passchange(){
	  
	  var email =document.getElementById("submittedEmail").value;
	  var pass =document.getElementById("password1").value;
	  var pass2 =document.getElementById("password2").value;
	$.ajax({
       type: 'POST',
       url: 'passchange.php',
	   data: 'emaildata='+email+'&pass='+pass+'&pass2='+pass2,
       success:  function(data)
       {
		   if(data.trim()=='success'){	  
			  window.open('passwordChangedConfirm.php');
		   }
		   else{
			  
			document.getElementById("ResponseMesage").innerHTML='<div class="alert alert-danger">'+data+'</div>';	
		   }
        //console.log(data);
		
       }
   });
	  
  }
  function CodeCountry(){
	  var e = document.getElementById('Country');
	var countryId= e.options[e.selectedIndex].value;
	$.ajax({
       type:'POST',
       url:'get_countrycode.php',
       data:'countryid='+countryId,
       success: function(data)
       {       
		document.getElementById('countrycode').value=data;
         
       }
    });
	  
  }
	 

	
