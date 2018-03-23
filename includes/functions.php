<?php

// function naming conventions are the same as variables (minus the $ sign)
// should start with lowercase letter
// $fieldName and $default are PARAMETERS and are only available inside the function
// by providing a default value to a parameter, it becomes optional
function formVal($fieldName, $default = ''){
	// only global or super-global variables from outside the function are available
	//global $value; // this would make $value accessible outside the function
	
	
	// check for a POST value, then a GET value
	if(isset($_POST[$fieldName])){
		$value = $_POST[$fieldName];
	}else if(isset($_GET[$fieldName])){
		$value = $_GET[$fieldName];
	}else{
		// the default if the form hasn't been submitted
		$value = $default; 
	}

	// function exits at the first return statement
	// and it returns to the line of code that called the function
	return $value;
}




// PASS-BY-VALUE vs PASS-BY-REFERENCE
// by default, strings, numbers, booleans, simple arrays are passed by value (not modified outside the function)

function concatenate($string1, $string2){
	$string1 .= $string2;
}

// & says that variable will be pass-by-reference
// pass-by-reference is passing a reference to the original variable instead of a copy of the value
function add2arr(&$array, $value){
	$array[] = $value;
}

// function to calculate percentage of choices correct
function calcPercent($totalCorrect, $possible){
	
	$percentage = $totalCorrect / $possible;
	
	$finalPercent = $percentage * 100;
	
	echo 'Your Percentage: ' . $finalPercent . '%';
}











