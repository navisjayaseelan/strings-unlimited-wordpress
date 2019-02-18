<?php
$COMMON_TITLE = "Strings Unlimited | A Clothing Company";
switch ($_SERVER["SCRIPT_NAME"]) {
	case "about-us.php":
		$CURRENT_PAGE = "About"; 
		$THIS_TITLE = "About us";
		break;
	case "contact-us.php":
		$CURRENT_PAGE = "Contact"; 
		$THIS_TITLE = "Contact us";
		break;	
	default:
		$CURRENT_PAGE = "Index";
		$THIS_TITLE = "Home";
}
if(!empty($THIS_TITLE)) {
	$PAGE_TITLE = $COMMON_TITLE . " - " . $THIS_TITLE;
}
else {
	$PAGE_TITLE = $COMMON_TITLE;
}
$to_email = "michael.bearly@gmail.com";
?>