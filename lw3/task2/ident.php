<?php
header("Content-Type: text/plain");
function getGETParameter($key) 
{ 
	return isset($_GET[$key]) ? (string) $_GET[$key] : null; 
}
$id = getGETParameter('identifier');
$space = ' ';
$num = array('1'-'0');
$errSp = false;
$errFNum = false;
$errUnCh = false;
if (strpos($id, $space) !== false)
{
	$errSp = true;  
}
$id = trim($id);
$first = $id[0];
$errFNum = in_array($first, $num);
if(($errFNum == false) and ($errSp == false) and ($errUnCh == false))
{
	echo 'YES';
}
else
{
	echo 'NO'."\n";
}
if ($errSp == true)
{
	echo 'не должно быть пробелов'."\n";
}
if ($errFNum == true)
{
	echo 'число не может быть первым символом';
}