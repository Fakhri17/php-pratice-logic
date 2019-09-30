<?php 

    $input = 5;
    for($a=$input; $a>0; $a--){
        for($b=$input; $b>=$a; $b--){
            echo "*";
        }
        echo "<br>";
    }
?>


<br>
<br>

<?php 
    for($a=1; $a<=$input; $a++ ){
        for($b=$input; $b>=$a; $b--){
            echo "*";
        }
        echo "<br>";
    }
?>
<br>
<br>


<?php

    for( $a=$input;$a>0;$a--) {
        for($b=1; $b<=$a; $b++){
            echo " &nbsp ";
        }
        for($c=$input;$c>=$a;$c--){
            echo "*";
        }
        echo "<br> ";
    }
?>
<br>
<br>

<?php

    for( $a=1;$a<=$input;$a++) {
        for($b=1; $b<=$a; $b++){
            echo " &nbsp ";
        }
        for($c=$input;$c>=$a;$c--){
            echo "*";
        }
        echo "<br> ";
    }
?>