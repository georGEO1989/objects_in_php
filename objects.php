<?php
$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = $_POST['email'];
$password = $_POST['password'];
$from = $_POST['from'];


$inbox = imap_open($hostname, $username, $password) or die('Cannot connect');

$emails = imap_search($inbox,'FROM "@'. $from . '"');

if($emails) {
	$output = '';

	rsort($emails);

	foreach($emails as $email_number) {
		$overview = imap_fetch_overview($inbox, $email_number,0);
		$message = imap_fetchbody($inbox, $email_number,2);
		$output.='<div class="body">'. $message . "</div>";
	}

	//echo $output;
}

imap_close($inbox);
/////////////////////////////////////////////////////////////////////////////////
// Function for checking for spam
function checkString($this){
	//filter for the spam list
	$filter_list = array();
	array_push($filter_list, "email",
							 "computer",
						 	 "microsoft",
						     "windows"
						 	);
	//for each list to go through array and find strings within the strings
	foreach ($filter_list as $key) {
		//this to search through the string and find the keywords
		if (strpos($this, $key) !== false) {
			header( 'Location: http://localhost/objects/result_bad.html' );
		} 
		else {
			header( 'Location: http://localhost/objects/result_good.html' );
		}
	}
}

// $string = "This is totally spam";

checkString($output);
?>