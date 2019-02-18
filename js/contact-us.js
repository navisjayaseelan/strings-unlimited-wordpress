$(document).ready(function () {
	$("#contact-form").submit(function(event){
		// cancels the form submission
	    event.preventDefault();
	    submitForm();
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
	            }
	        }
	    });
	}
	function formSuccess(){
	    $( "#msgSubmit" ).removeClass( "hidden" );
	}
});