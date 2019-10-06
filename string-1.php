<?php 

$result = "";
$input = "smkn 2 surabaya";
$last = strlen($input)-1;

for($x=$last; $x>=0; $x--)
{
     $result = $result.$input[$x];
}

echo $result;
    
?>