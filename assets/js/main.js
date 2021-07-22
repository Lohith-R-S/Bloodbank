

  
  
  $(document).ready(function() {
    
	$("#choose").val('select');
	
  });
  
  function myFunction(){
		var x = document.getElementById("choose").value;
		
		if(x == '0'){
			$("#blood_type").css("display", "none");
			$("#blood_type1").css("display", "none");
			$("#user_type").val('0');
			
		}
		else if (x == '1'){
			$("#blood_type").css("display", "block");
			$("#blood_type1").css("display", "block");
			$("#user_type").val('1');
		}
		else if (x == 'select'){
			$("#blood_type").css("display", "none");
			$("#blood_type1").css("display", "none");
		}
		
		
	}
	
	