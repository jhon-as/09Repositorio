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

    function suma_digitos($num ){
      $sumaDig = 0;
      $aux;
      while($num!=0){
        $aux; = $num%10;
        $num = $num/10;
        $sumaDig = $sumaDig + $aux;
        }
        return $sumaDig;
    }

?>