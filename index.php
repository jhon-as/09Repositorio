<?php
    
    function cuadrado( $num ){
        for($i=1;$i<=$num;$i++){
            for($j=1;$j<=$num;$j++){
               if($i == 1 || $i == $num){  
                echo " * ";
                }
                if($i > 1 && $i!=$num){
                    if($j == 1 || $j == $num){
                        echo " * ";
                    }else if($j!=1 || $j!=$num){
                        echo "   ";
                    }
                }
            }
            echo "<br>";
        }
    }

?>