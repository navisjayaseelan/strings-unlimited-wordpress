<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "michael.bearly@gmail.com";
    $email_subject = "String Unlimited | A Clothing Company Enquiry";
 
    $title = $_POST['title']; // required
    $fname = $_POST['fname']; // required
    $lname = $_POST['lname']; // required
    $company = $_POST['company']; // required
    $industry = $_POST['industry']; // not required
    $city = $_POST['city']; // required
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
	if(!preg_match($email_exp,$email_from)) {
		$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	}

	$string_exp = "/^[A-Za-z .'-]+$/";

	if(!preg_match($string_exp,$fname)) {
		$error_message .= 'The First Name you entered does not appear to be valid.<br />';
	}

	if(!preg_match($string_exp,$lname)) {
		$error_message .= 'The Last Name you entered does not appear to be valid.<br />';
	}

	if(strlen($message) < 2) {
		$error_message .= 'The Message you entered do not appear to be valid.<br />';
	}

	if(strlen($error_message) > 0) {
		died($error_message);
	}
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Title: ".clean_string($title)."\n";
    $email_message .= "First Name: ".clean_string($fname)."\n";
    $email_message .= "Last Name: ".clean_string($lname)."\n";
    $email_message .= "Company: ".clean_string($company)."\n";
    $email_message .= "Industry: ".clean_string($industry)."\n";
    $email_message .= "City: ".clean_string($city)."\n";
    $email_message .= "Country: ".clean_string($country)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
	$email_message .= "Email: ".clean_string($email)."\n";   
	$email_message .= "Message: ".clean_string($message)."\n";  
 
	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	$success = mail$email_to, $email_subject, $email_message, $headers);  

	// redirect to success page
	if ($success){
	   echo "success";
	}else{
	    echo "invalid";
	}
}
?>