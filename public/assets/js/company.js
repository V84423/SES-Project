jQuery(function ($) {





	 function validateInput() {
	  var success = true;

	  	var element = $("[name='company']");
	  
	    if (element.val() == null || element.val().trim() == "") {
	      element.next(".reg-error").css("display","block");
	      success = false;
	    } else {	      
	      element.next(".reg-error").css("display","none");
	    }    

	  	var element = $("[name='lastname']");
	  
	    if (element.val() == null || element.val().trim() == "") {
	      element.next(".reg-error").css("display","block");
	      success = false;
	    } else {	      
	      element.next(".reg-error").css("display","none");
	    }   
	  	
	  	var element = $("[name='firstname']");
	  
	    if (element.val() == null || element.val().trim() == "") {
	      element.next(".reg-error").css("display","block");
	      success = false;
	    } else {	      
	      element.next(".reg-error").css("display","none");
	    }     


	    var element = $("[name='phone']");
		var Phone = /^\d{2}-\d{4}-\d{4}$/i;

		if (element.val() == null || element.val().trim() == "" || !Phone.test(element.val())) {
	      element.next(".reg-error").css("display","block");
	      success = false;
	    } else {	      
	      element.next(".reg-error").css("display","none");
	    }    	    

	    var element = $("[name='email']");
	  	var Email = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

	    if (element.val() == null || element.val().trim() == "" || !Email.test(element.val())) {
	      element.next(".reg-error").css("display","block");
	      success = false;
	    } else {	      
	      element.next(".reg-error").css("display","none");
	    }     

	    var element = $("[name='password']");
	  
	    if (element.val() == null || element.val().trim() == "" || element.val().length < 8) {
	      element.next(".reg-error").css("display","block");
	      success = false;
	    } else {	      
	      element.next(".reg-error").css("display","none");
	    }   


	  	return success;
	  }



	  $("#company_register").click(function() {

	    if (validateInput()) {
	         $('#companyRegistrationForm').submit();
	    }
	  });






























});