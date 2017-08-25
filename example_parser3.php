<?php
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['d']) ){
	$n = htmlentities($_POST['n']); // HINT: use preg_replace() to filter the data
	$e = htmlentities($_POST['e']);
	$d = htmlentities(nl2br($_POST['d']));
	$to = "neilfloyd99@gmail.com";	
	$from = $e;
	$subject = 'Request for a Party Date';
	$message = ('<b>Name:</b> '.$n.' <br><b>Email:</b> '.$e.' <p>'.$d.'</p>');
	$headers = ("From: $from\n");
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>