<?php

$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = 'george.offley@gmail.com';
$password = '******';

$inbox = imap_open($hostname, $username, $password) or die('Cannot connect');

$emails = imap_search($inbox,'FROM "@outlook.com"');

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