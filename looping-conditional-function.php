<?php 
    $input = 5;

    function segitigaA($input){
        for($a=$input; $a>0; $a--){
            for($b=$input; $b>=$a; $b--){
                echo "*";
            }
            echo "<br>";
        }
    }
    

    function segitigaB($input){
        for($a=1; $a<=$input; $a++ ){
            for($b=$input; $b>=$a; $b--){
                echo "*";
            }
            echo "<br>";
        }
    }

    function segitigaC($input){
        
    for( $a=$input;$a>0;$a--) {
        for($b=1; $b<=$a; $b++){
            echo " &nbsp ";
        }
        for($c=$input;$c>=$a;$c--){
            echo "*";
        }
        echo "<br> ";
      }
    }

    function segitigaD($input){
        for( $a=1;$a<=$input;$a++) {
            for($b=1; $b<=$a; $b++){
                echo " &nbsp ";
            }
            for($c=$input;$c>=$a;$c--){
                echo "*";
            }
            echo "<br> ";
        }
    }


    echo segitigaA($input)."<br>";
    echo segitigaB($input)."<br>";
    echo segitigaC($input)."<br>";
    echo segitigaD($input)."<br>";
?>