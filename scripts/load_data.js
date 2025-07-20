jQuery(window).load(function() {
    load_savings_accounts();
    load_investment_accounts();
    load_investment_accounts();
    load_business_accounts();
    load_accounts_model();
    getDirectors();
    getBackground();
    getSeniorManagers();
	getBanking();
    getmortgage_loans();
	getmortgage_main();
	getmortgage_req()
	getmortgage_dias();
   load_model();
  
	getBankingNetwork();
    load_gallery_model();
    getProperty();
    load_Main_map();
	});
	
	function load_Main_map(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	
	var map='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3846.2572022379486!2d28.28026641485012!3d-15.4166633892869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1940f358d0d526b9%3A0x4bd43665f8e204cd!2sZambia%20National%20Building%20Society%20Lusaka!5e0!3m2!1sen!2szm!4v1592914482178!5m2!1sen!2szm" width="600" height="900" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
				

			document.getElementById("Main_map").innerHTML=map;
   
  
   
	
}


function load_savings_accounts(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	var istheredata=document.getElementById("savings_accounts").innerHTML
	console.log(istheredata);
	if(istheredata.trim()===""){
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/get_savings_accounts.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
			   
			document.getElementById("savings_accounts").innerHTML=data;
      ;
		  
        //console.log(data);
		
       }
   });
   
	}
}
function load_branchData(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	var e = document.getElementById ("branches_select");
	var branch_id= e.options[e.selectedIndex].value;
	var istheredata=document.getElementById("branchData").innerHTML
	console.log(branch_id);


	$.ajax({
       type: 'POST',
       url: 'actions/get_Branchdata.php',
	   data: 'branch_id='+branch_id,
       success:  function(data)
       {
		  
			   
			document.getElementById("branchData").innerHTML=data;
      //console.log(istheredata);
		  
        console.log(data);
		
       }
   });
   
	
}

function load_atmdata(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	var istheredata=document.getElementById("savings_accounts").innerHTML
	console.log(istheredata);
	if(istheredata.trim()===""){
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/get_savings_accounts.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
			   
			document.getElementById("savings_accounts").innerHTML=data;
      ;
		  
        //console.log(data);
		
       }
   });
   
	}
}

function load_investment_accounts(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	var istheredata=document.getElementById("investment_accounts").innerHTML
	console.log(istheredata);
	if(istheredata.trim()===""){
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/get_investment_accounts.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
	
			document.getElementById("investment_accounts").innerHTML=data;
      ;
		  
        //console.log(data);
		
       }
   });
   
	}
}
function load_business_accounts(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	var istheredata=document.getElementById("business_accounts").innerHTML
	console.log(istheredata);
	if(istheredata.trim()===""){
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/get_business_accounts.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
			
			document.getElementById("business_accounts").innerHTML=data;
      ;
		  
        //console.log(data);
		
       }
   });
   
	}
}


function load_accounts_model(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	var istheredata=document.getElementById("account_model").innerHTML
	if(istheredata.trim()===""){
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/get_account_model.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
			  
			document.getElementById("account_model").innerHTML=data;
  
		  
        //console.log(data);
		
       }
   });
   
	}
}
 
function getDirectors(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	var istheredata=document.getElementById("directors_main").innerHTML
	console.log(istheredata);
	if(istheredata.trim()===""){
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/get_directors.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
			  
			document.getElementById("directors_main").innerHTML=data;
      ;
		  
        //console.log(data);
		
       }
   });
   
	}
}


function getBackground(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	var istheredata=document.getElementById("background_main").innerHTML
	console.log(istheredata);
	if(istheredata.trim()===""){
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/get_background.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
			  
			document.getElementById("background_main").innerHTML=data;
      ;
		  
        //console.log(data);
		
       }
   });
   
	}
}

function getSeniorManagers(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	var istheredata=document.getElementById("senior_managers_main").innerHTML
	console.log(istheredata);
	if(istheredata.trim()===""){
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/get_managers.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
			 
			document.getElementById("senior_managers_main").innerHTML=data;
      ;
		  
        //console.log(data);
		
       }
   });
   
	}
}

function getmortgage_main(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	var istheredata=document.getElementById("mortgage_main").innerHTML

	if(istheredata.trim()===""){
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/get_mortgage_main.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
			   
			document.getElementById("mortgage_main").innerHTML=data;
      ;
		  
        //console.log(data);
		
       }
   });
   
	}
}

function getmortgage_loans(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	var istheredata=document.getElementById("Mortgage_loan").innerHTML

	if(istheredata.trim()===""){
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/get_motgage_loans.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
			   
			document.getElementById("Mortgage_loan").innerHTML=data;
      ;
		  
        //console.log(data);
		
       }
   });
   
	}
}

function getmortgage_req(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	var istheredata=document.getElementById("mortgage_req").innerHTML

	if(istheredata.trim()===""){
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/get_mortgage_req.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
			   
			document.getElementById("mortgage_req").innerHTML=data;
      ;
		  
        //console.log(data);
		
       }
   });
   
	}
}

function getmortgage_dias(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	var istheredata=document.getElementById("diasp").innerHTML

	if(istheredata.trim()===""){
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/diaspora.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
			   
			document.getElementById("diasp").innerHTML=data;
      ;
		  
        //console.log(data);
		
       }
   });
   
	}
}





function getBankingNetwork(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	var istheredata=document.getElementById("branch_net").innerHTML

	if(istheredata.trim()===""){
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/get_Network.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
			 
			document.getElementById("branch_net").innerHTML=data;
      ;
		  
        //console.log(data);
		
       }
   });
   
	}
}
function getBanking(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/get_banking.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
			console.log(data);
			 
			document.getElementById("Banking_space").innerHTML=data;
      ;
		  
        console.log(data);
		
       }
   });
   
	
}

function getProperty(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	var istheredata=document.getElementById("propertysel").innerHTML

	if(istheredata.trim()===""){
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/do_property_sell.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
			  
			document.getElementById("propertysel").innerHTML=data;
      ;
		  
        //console.log(data);
		
       }
   });
   
	}
}

function load_gallery_model(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	var istheredata=document.getElementById("gallery").innerHTML
	if(istheredata.trim()===""){
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/get_gallery_model.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
			  
			document.getElementById("gallery").innerHTML=data;
  
		  
        //console.log(data);
		
       }
   });
   
	}
}

function load_model(){

	//var emaildata =document.documentElement.innerHTML;
	//var emaildata=document.getElementById('mydata').innerHTML;;
	//console.log(emaildata);
	
	var id=1;
	$.ajax({
       type: 'POST',
       url: 'actions/get_model_data.php',
	   data: 'id='+id,
       success:  function(data)
       {
		  
			  
			document.getElementById("banking_model_data").innerHTML=data;
  
		  
        console.log(data);
		
       }
   });
   
	
}