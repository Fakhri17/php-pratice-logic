<?php 
    function cariIndex($input, $cariValue) 
    {
        $res = -1;
        foreach ($input as $key => $value) { 
            if($value == $cariValue){
                $res = $key;
            }
        }
        echo "Index dari value ".$cariValue." adalah ".$res;
        echo "<br/>";
    }

    $input = [ 1, 5, 6, 9, 10];
    echo "<p>". join($input, ", ") ."</p>";
    cariIndex($input, 6);
    cariIndex($input, 10);
    cariIndex($input, 11);