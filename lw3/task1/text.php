<?php 
header("Content-Type: text/plain");
function getGETParameter($key) 
{ 
	return isset($_GET[$key]) ? (string) $_GET[$key] : null; 
}
function removeExtraBlanks($text) 
{ 
	$text = trim($text); 
	$words = explode(" ", $text); 
	$text = ""; 
	foreach ($words as $key => $value) 
	{ 
		if (strlen($value) > 0) 
		{ 
			$text .= $value . ' '; 
		} 
	} 
	return trim($text); 
} 
$text = getGETParameter('text');  
$text = removeExtraBlanks($text); 
echo "Text:".$text;  
?>