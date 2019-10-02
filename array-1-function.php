<!-- Opsional 1 -->
<?php 
    $input = [1, 3, 2, 9, 4];
    $angka = 3;

     function arraysearch($input,$angka){
         foreach ($input as $key ) {
             echo $key *= $angka;
             echo "<br/>";
         }
       
     }

     echo arraysearch($input, $angka);
?>

<br>
<br>

<!-- Opsional 2 -->
<?php 
    $input = [1, 3, 2, 9, 4];
    
     function ArraySrc($input,$angka){
         foreach ($input as $key ) {
             echo $key *= $angka;
             echo "<br/>";
         }
       
     }

     echo ArraySrc($input,3);
?>