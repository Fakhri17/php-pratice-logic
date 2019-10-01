<?php 
     $input = [1, 3, 2, 9, 4];
   
     
     function reversearray($input){
        $balik = count($input)-1;
         for ($i=$balik; $i>=0; $i--) { 
             print($input[$i]);
             echo "<br/>";
            
         }
     }

     echo reversearray($input);
?>