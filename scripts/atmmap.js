	function LoadATM(){
		   var e = document.getElementById('city');
	var id= e.options[e.selectedIndex].value;
		 
	// ;
    $.ajax({
       type: "POST",
       url: 'actions/getATM.php',
       data: "id="+id,
       success: function(data)
       {
        
			
			 
		 document.getElementById('map').innerHTML=data;
		 document.getElementById('mapM').innerHTML=data;
			 
		 
          
		 
			
			
          }
       
   });
		
	}
	function LoadATMM(){
		   var e = document.getElementById('cityM');
	var id= e.options[e.selectedIndex].value;
		 
	// ;
    $.ajax({
       type: "POST",
       url: 'actions/getATM.php',
       data: "id="+id,
       success: function(data)
       {
        
			
			 
		 
		 document.getElementById('mapM').innerHTML=data;
			 
		 
          
		 
			
			
          }
       
   });
		
	}

