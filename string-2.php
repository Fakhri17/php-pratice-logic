<?php
    $input = "renaldy";
    $penanda = " / ";
    $arrstr = str_split($input);
    $hasil = "";

    for($i=0; $i < sizeof($arrstr); $i++){
        if($i-sizeof($arrstr) < -1)
        $hasil = $hasil.$arrstr[$i].$penanda;
        else
        $hasil = $hasil.$arrstr[$i];
       
    }

    echo $hasil;
 ?>

<br>
<br>

<?php 
$input2 = "renaldy dan sahabat";
$penanda2 = " / ";
$gabung = str_replace(' ', '', $input2);
$arrstr2 = str_split($gabung);
$hasil2 = "";

for($i=0; $i < sizeof($arrstr2); $i++){
    if($i-sizeof($arrstr2) < - 1)
    $hasil2 = $hasil2.$arrstr2[$i].$penanda2;
    else
    $hasil2 = $hasil2.$arrstr2[$i];
}

echo $hasil2;


?>
 