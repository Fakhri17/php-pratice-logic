<?php 
    $input = "smkn 2 surabaya";
    echo strrev ( $input );
    
    
?>
<br>
<br>
<?php 

$result = "";
$input = "smkn2";
$last = strlen($input)-1;

for($x=$last; $x>=0; $x--)
{
     $result = $result.$input[$x];
}

echo $result;
    
?>