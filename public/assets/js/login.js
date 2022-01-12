jQuery(function ($) {


	 function validateInput() {
	  var success = true;	  	

	    var element = $("[name='email']");
	  	var Email = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

	    if (element.val() == null || element.val().trim() == "" || !Email.test(element.val())) {
	      element.addClass("required");
	      success = false;
	    } else {	      
	      element.removeClass("required");	      
	    }     

	    var element = $("[name='password']");
	    var Password = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%&])(.{8,20}$)/;

	    if (element.val() == null || element.val().trim() == "" || element.val().length < 8) {
	      element.addClass("required");
	      success = false;
	    } else {	      
	      element.removeClass("required");	      
	    }   

	  	return success;
	  }



	  $("#login").click(function() {

	    if (validateInput()) {
	         $('#loginForm').submit();
	    }
	  });






























});