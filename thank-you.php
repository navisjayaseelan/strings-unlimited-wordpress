<?php

$errorMSG = "";
// NAME
if (empty($_POST["title"])) {
    $errorMSG = "Title is required ";
} else {
    $title = $_POST['title']; // required
}
// NAME
if (empty($_POST["fname"])) {
    $errorMSG = "First Name is required ";
} else {
    $fname = $_POST['fname']; // required
}
// NAME
if (empty($_POST["lname"])) {
    $errorMSG = "Last Name is required ";
} else {
    $lname = $_POST['lname']; // required
}
// NAME
if (empty($_POST["company"])) {
    $errorMSG = "Company Name is required ";
} else {
    $company = $_POST['company']; // required
}
// NAME
if (empty($_POST["industry"])) {
    $errorMSG = "Industry Name is required ";
} else {
    $industry = $_POST['industry']; // required
}
// NAME
if (empty($_POST["city"])) {
    $errorMSG = "City Name is required ";
} else {
    $city = $_POST['city']; // required
}
// NAME
if (empty($_POST["country"])) {
    $errorMSG = "Country Name is required ";
} else {
    $country = $_POST['country'];
}
// NAME
if (empty($_POST["phone"])) {
    $errorMSG = "Phone Number is required ";
} else {
    $phone = $_POST['phone'];
}
// NAME
if (empty($_POST["email"])) {
    $errorMSG = "E mail  Number is required ";
} else {
    $email = $_POST['email'];
}
// NAME
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errorMSG = "Invalid email format"; 
}
// NAME
if (empty($_POST["message"])) {
    $errorMSG = "Message is required ";
} else {
    $message = $_POST['message'];
}
 
function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}

$email_to = "michael.bearly@gmail.com";
$email_subject = "String Unlimited | A Clothing Company Enquiry";

$email_message = "Form details below.\n\n";

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

// send email
$success = mail($email_to, $email_subject, $email_message, "From:".$email);
 
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}
else{
	if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>