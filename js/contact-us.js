$(document).ready(function () {
	$("#contact-form").validator().on("submit", function (event) {
	    if (event.isDefaultPrevented()) {
	        // handle the invalid form...
	        formError();
	        submitMSG(false, "Please fill all required fields.");
	    } else {
	        // everything looks good!
	        event.preventDefault();
	        submitForm();
	    }
	});

	function submitForm(){
	    // Initiate Variables With Form Content
	    var title = $('#title').val(); // required
		var fname = $('#fname').val(); // required
		var lname = $('#lname').val(); // required
		var company = $('#company').val(); // required
		var industry = $('#industry').val(); // not required
		var city = $('#city').val(); // required
		var country = $('#country').val();
		var phone = $('#phone').val();
		var email = $('#email').val();
		var message = $('#message').val();

	    $.ajax({
	        type: "POST",
	        url: "contact-thank-you",
	        data: "title=" + title + "&fname=" + fname + "&lname=" + lname + "&company=" + company + "&industry=" + industry + "&city=" + city + "&country=" + country + "&phone=" + phone  + "&email=" + email  + "&message=" + message  ,
	        success : function(text){
	            if (text == "success"){
	                formSuccess();
	            }else {
              		formError();
              		submitMSG(false,text);
          		}
	        }
	    });
	}
	
	function formSuccess(){
	    $("#contact-form")[0].reset();
	    submitMSG(true, "Message Submitted!")
	}

	function formError(){
	    $("#contact-form").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	        $(this).removeClass();
	    });
	}

	function submitMSG(valid, msg){
	    if(valid){
	        var msgClasses = "h3 text-center tada animated text-success";
	    } else {
	        var msgClasses = "h3 text-center text-danger";
	    }
	    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
	}
});