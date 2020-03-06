<?php
header("Content-Type: text/plain");
function getGETParameter($key) 
{ 
	return isset($_GET[$key]) ? (string) $_GET[$key] : null; 
}
$id = getGETParameter('identifier');
$space = ' ';
$num = array('1','2','3','4','6','7','8','9','0');
$errSp = false;
$errEmS = false;
$errFNum = false;
$errUnCh = false;
foreach (str_split($id) as $value)
{
	if (((ord($value) > 1 and ord($value) < 48) or (ord($value) > 58 and ord($value) < 64) or (ord($value) > 90 and ord($value) <97) or ord($value) > 123) and ord($value) <> 32)
    {
    	$errUnCh = true;
    } 
}    	
if (strpos($id, $space) !== false)
{
	$errSp = true;  
}
$id = trim($id);
$first = $id[0];
$errFNum = in_array($first, $num);
if (strlen($id) == 0)
{
	$errEmS = true;
}
if(($errFNum == false) && ($errSp == false) && ($errUnCh == false) && ($errEmS == false))
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
if ($errUnCh == true)
{
	echo 'встречаются запрещенные символы'."\n";
}
if ($errFNum == true)
{
	echo 'число не может быть первым символом'."\n";
}
if ($errEmS == true)
{
	echo 'поле identifier нужно заполнить'."\n";
}