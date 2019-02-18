$("#contact-form").submit(function(event){
	// cancels the form submission
    event.preventDefault();
    submitForm();
});

function submitForm(){
    // Initiate Variables With Form Content
    var title = $('#title').value; // required
	var fname = $('#fname').value; // required
	var lname = $('#lname').value; // required
	var company = $('#company').value; // required
	var industry = $('industry').value; // not required
	var city = $('city').value; // required
	var country = $('country').value;
	var phone = $('phone').value;
	var email = $('email').value;
	var message = $('message').value;

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