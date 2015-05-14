<?php

function checkString($this){
	//filter for the spam list
	$filter_list = array();
	array_push($filter_list, "This",
							 "computer",
						 	 "microsoft",
						     "windows"
						 	);
	//for each list to go through array and find strings within the strings
	foreach ($filter_list as $key) {
		#this already goes through the array. Need to make a if else statement to take those and search the string for it
		// got this to search through the string and find the keywords
		if (strpos($this, $key) !== false) {
			echo 'true';
		} 
	}
}

$string = "This is totally spam";

checkString($string);