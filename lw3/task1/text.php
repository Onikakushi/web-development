<?php 
header("Content-Type: text/plain");
function getGETParameter($id) 
{ 
	return isset($_GET[$id]) ? (string) $_GET[$id] : null; 
}
function removeExtraBlanks($text)
{ 
	//$text = trim($text); 
	$words = explode(" ", $text); 
	$text = " "; 
	foreach ($words as $value) 
	{ 
		if ($value !== '') 
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