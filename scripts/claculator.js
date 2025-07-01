$(document).ready(function() {
  $('#Modgage_calculator_form').submit(function(e) {
	  
	   if(checkPeriod_Morgage()==1){
		   checkPeriod_Morgage();
		   e.preventDefault();
		   document.getElementById("period_response_loan").innerHTML='';
	   }else{
	   
  var prodid=document.getElementById("product_modgage");
  var Interest = prodid.options[prodid.selectedIndex].value;
  
 var Period=document.getElementById("period_Mortgage").value;
 var Amount=document.getElementById("amount_Mortgage").value;
    e.preventDefault();
	// ;
    $.ajax({
       type: "POST",
       url: 'actions/Calculate-Repayment.php',
       data: "Interest="+Interest+"&Period="+Period+"&Amount="+Amount,
       success: function(data)
       {
        
			 
			 
		 
			 
			  document.getElementById("Mortgage_repayment_response").innerHTML='<div class="alert alert-success">Your Monthly Repayment Amount Will be : <b>ZMW '+data+"</b></div>";
		 
          
		 
			
			
          }
       
   });
   
	   }
	   
 });
});

$(document).ready(function() {
  $('#loan_calculator_form').submit(function(e) {
	  if(checkPeriod_loan()==1){
		  e.preventDefault();
		  checkPeriod_loan();
		  document.getElementById("loan_repayment_response").innerHTML='';
	  }else{
  var prodid=document.getElementById("product_loan");
  var Interest = prodid.options[prodid.selectedIndex].value;
  
 var Period=document.getElementById("period_loan").value;
 var Amount=document.getElementById("amount_loan").value;
    e.preventDefault();
	// ;
    $.ajax({
       type: "POST",
       url: 'actions/Calculate-Repayment.php',
       data: "Interest="+Interest+"&Period="+Period+"&Amount="+Amount,
       success: function(data)
       {
       
          
		  document.getElementById("loan_repayment_response").innerHTML='<div class="alert alert-success">Your Monthly Repayment Amount Will be : <b>ZMW '+data+"</b></div>";
			
			
          }
       
   });
	  }
	 
 });
});

$(document).ready(function() {
  $('#Form_survey').submit(function(e) {
	 
		  e.preventDefault();
		  var Firstname= document.getElementById('FirstName').value;
		   var Email= document.getElementById('Email').value;
		    var Lastname= document.getElementById('LastName').value;
			var survey_id= document.getElementById('survey_id').value;
		  
		  
	var Question1='';
	var Question2='';
	var Question3='';
	var radios1 = document.getElementsByName('Question1');
console.log(radios1.length);
for (var i = 0; i < radios1.length; i++) {
    if (radios1[i].type === 'radio' && radios1[i].checked) {
        // get value, set checked flag or do whatever you need to
       Question1 = radios1[i].value;       
    }
}


	var radios2 = document.getElementsByName('Question2');

for (var i = 0; i < radios2.length; i++) {
	
    if (radios2[i].type === 'radio' && radios2[i].checked) {
        // get value, set checked flag or do whatever you need to
      Question2 = radios2[i].value;       
    }
}

	var radios3 = document.getElementsByName('Question3');

for (var i = 0; i < radios3.length; i++) {
    if (radios3[i].type === 'radio' && radios3[i].checked) {
        // get value, set checked flag or do whatever you need to
      Question3 = radios3[i].value;       
    }
}
	
		  

		 
		 
		  
	 
  if(Question1.trim() || Question2.trim() || Question3.trim() ){
	// ;
    $.ajax({
       type: "POST",
       url: 'actions/sendSuvey.php',
       data: "Firstname="+Firstname+"&Email="+Email+"&Lastname="+Lastname+"&Question1="+Question1+"&Question2="+Question2+"&Question3="+Question3+"&survey_id="+survey_id,
       success: function(data)
       {
       if(data.trim()=='success'){
          
		  document.getElementById("Survey_Response").innerHTML='<div class="alert alert-success">Thank You <b>'+Firstname+' '+Lastname+'</b> For your Submission! we value your Feedback</b></div>';
		  
		  document.getElementById('FirstName').value='';
		  document.getElementById('Email').value='';
		   document.getElementById('LastName').value='';
	
			
	   }else{
		   document.getElementById("Survey_Response").innerHTML='<div class="alert alert-warning"> '+data+'</div>';
		     document.getElementById("Survey_Response1").innerHTML='<div class="alert alert-warning"> '+data+'</div>';
		   
	   }
          }
		  
       
   });
  }else{
	  document.getElementById("Survey_Response").innerHTML='<div class="alert alert-danger"> Please Select an Option </div>';
	  document.getElementById("Survey_Response1").innerHTML='<div class="alert alert-danger"> Plaese Select an Option </div>';
  }
	 
 });
});



function submitFeddback(){
console.log('working on survey');


	 
	
		  var Firstname= document.getElementById('FirstName2').value;
		   var Email= document.getElementById('Email2').value;
		    var Lastname= document.getElementById('LastName2').value;
			var survey_id= document.getElementById('survey_id2').value;
		  
		  
	var Question1='';
	var Question2='';
	var Question3='';
	var radios1 = document.getElementsByName('Quest1');
console.log(radios1.length);
for (var i = 0; i < radios1.length; i++) {
    if (radios1[i].type === 'radio' && radios1[i].checked) {
        // get value, set checked flag or do whatever you need to
       Question1 = radios1[i].value;       
    }
}


	var radios2 = document.getElementsByName('Quest2');

for (var i = 0; i < radios2.length; i++) {
	
    if (radios2[i].type === 'radio' && radios2[i].checked) {
        // get value, set checked flag or do whatever you need to
      Question2 = radios2[i].value;       
    }
}

	var radios3 = document.getElementsByName('Quest3');

for (var i = 0; i < radios3.length; i++) {
    if (radios3[i].type === 'radio' && radios3[i].checked) {
        // get value, set checked flag or do whatever you need to
      Question3 = radios3[i].value;       
    }
}
	
		  

		 
		 
		  
	 
  if(Question1.trim() || Question2.trim() || Question3.trim() ){
	// ;
    $.ajax({
       type: "POST",
       url: 'actions/sendSuvey.php',
       data: "Firstname="+Firstname+"&Email="+Email+"&Lastname="+Lastname+"&Question1="+Question1+"&Question2="+Question2+"&Question3="+Question3+"&survey_id="+survey_id,
       success: function(data)
       {
       if(data.trim()=='success'){
          
		  document.getElementById("feebackResponse1").innerHTML='<div class="alert alert-success">Thank You <b>'+Firstname+' '+Lastname+'</b> For your Submission! we value your Feedback</b></div>';
		  
		  document.getElementById('FirstName').value='';
		  document.getElementById('Email').value='';
		   document.getElementById('LastName').value='';
	
			
	   }else{
		   document.getElementById("feebackResponse1").innerHTML='<div class="alert alert-warning"> '+data+'</div>';
		     document.getElementById("feebackResponse1_mobile").innerHTML='<div class="alert alert-warning"> '+data+'</div>';
		   
	   }
          }
		  
       
   });
  }else{
	  document.getElementById("feebackResponse1").innerHTML='<div class="alert alert-danger"> Please Select an Option </div>';
	  document.getElementById("feebackResponse1_mobile").innerHTML='<div class="alert alert-danger"> Plaese Select an Option </div>';
  }
	 
 }



function checkPeriod_loan(){
	var valid=0;
 var prodid=document.getElementById("product_loan");
  var product_name = prodid.options[prodid.selectedIndex].text; 
  
var Period=document.getElementById("period_loan").value;

    
	// ;
    $.ajax({
		 async:false,
       type: "POST",
       url: 'actions/CheckPeriod.php',
       data: "product_name="+product_name+"&Period="+Period,
       success: function(data)
       {
		   console.log(data);
        if(data.trim()=='success'){
          
		  document.getElementById("period_response_loan").innerHTML='';
			
		}else{
			
			 document.getElementById("period_response_loan").innerHTML='<div class="alert alert-danger">'+data+'</b></div>';
			 return valid=1;
		}
		

          }
	
	});
	return valid;
}

function checkPeriod_Morgage(){
	var valid=0;
 var prodid=document.getElementById("product_modgage");
  var product_name = prodid.options[prodid.selectedIndex].text; 
  
var Period=document.getElementById("period_Mortgage").value;

    
	// ;
    $.ajax({
		 async:false,
       type: "POST",
       url: 'actions/CheckPeriod.php',
       data: "product_name="+product_name+"&Period="+Period,
       success: function(data)
       {
		   console.log(data);
        if(data.trim()=='success'){
          
		  document.getElementById("period_response_mortgage").innerHTML='';
			
		}else{
			
			 document.getElementById("period_response_mortgage").innerHTML='<div class="alert alert-danger">'+data+'</b></div>';
			 valid=1;
		}
		

          }
	
	});
	
	
	return valid;
}

function LoadFeedbackForm(){

var prodid=document.getElementById("feeddrop");
  var survey_id = prodid.options[prodid.selectedIndex].value; 
  

    
	// ;
    $.ajax({
		 async:false,
       type: "POST",
       url: 'includes/getFeedbackform.php',
       data: "survey_id="+survey_id,
       success: function(data)
       {
		
          
		  document.getElementById("feebackplace").innerHTML=data;
			
		

          }
	
	});
	
	

}

function LoadFeedbackForm_mobile(){

var prodid=document.getElementById("feeddrop_mobile");
  var survey_id = prodid.options[prodid.selectedIndex].value; 
  

    
	// ;
    $.ajax({
		 async:false,
       type: "POST",
       url: 'includes/getFeedbackform.php',
       data: "survey_id="+survey_id,
       success: function(data)
       {
		
          
		  document.getElementById("feebackplace_mobile").innerHTML=data;
			
		

          }
	
	});
	
	

}


