
<?php 
    $input = [ 1, 5, 6, 9, 10];
    $cari = 6;
    foreach ($input as $key => $value) { 
        if($value == $cari){
            $res = $key;
        }
    } 
    
    echo "Index ".$cari." = ".$res
    
?>


