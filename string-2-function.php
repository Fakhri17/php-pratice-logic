<?php
     $input = "renaldy";
     $input2 = "renaldy dan sahabat";
     $tanda = " / ";

     function gabungstring($str, $tanda){
        $gabung = str_replace(' ', '', $str);
        $arrstr = str_split($gabung);
        $sizeof = sizeof($arrstr);
        $result = "";

        for ($i=0; $i < $sizeof; $i++) { 
            if ($i-$sizeof < -1) {
              $result = $result.$arrstr[$i].$tanda;
            }else{
              $result = $result.$arrstr[$i];
            }
          }
          echo $result;
          echo "<br>";
          echo "<br>";
        }
     

     gabungstring($input , $tanda);
     gabungstring($input2 , $tanda);