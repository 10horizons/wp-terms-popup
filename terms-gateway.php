<?php

if (get_option('termsopt_redirecturl') && get_option('termsopt_redirecturl') != '') {
	$termsRedirectUrl = get_option('termsopt_redirecturl');
}
else {
	$termsRedirectUrl = 'http://google.com';
}

if (get_option('termsopt_expiry') && get_option('termsopt_expiry') != '') {
	$sesslifetime = (get_option('termsopt_expiry')) * 60 * 60; // in seconds
}
else {
	$sesslifetime = 3 * 24 * 60 * 60; // 3 days (in seconds)
}

ini_set('session.name', 'terms_sessionid');
ini_set('session.gc_maxlifetime', $sesslifetime);
session_set_cookie_params($sesslifetime);

@session_start();
$interception_string=ob_get_clean(); // get output


if (isset($_POST['SubmitAgree'])) {
	$_SESSION['terms_accepted'] = true;
}
else if (isset($_POST['SubmitDecline'])) {
	header('Location: '.$termsRedirectUrl);
	exit;
}


if(isset($_SESSION['terms_accepted'])) {
	echo $interception_string;
}
else {
	include('terms.php');
}

?>