<?php
    $input = "smkn 2 surabaya";

    function reversestring($input){
        $last = strlen($input)-1;
        for ($x=$last; $x>=0 ; $x--) { 
            $result = $input[$x];
             echo $result;
        }
    }

    echo $input."<br>";
    echo " reverse = ";
    reversestring($input);
?>