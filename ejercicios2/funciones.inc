<?php
function saludo($n){
    echo "Hola, " . $n;
}

function cuenta($a, $b){
    if ($a > $b) {
        for ($i = $b; $i <= $a; $i++) {

            echo $i;
            if ($i != $a) {
                echo ", ";
            }
        }
    } else {
        for ($i = $b; $i >= $a; $i--) {
            echo $i;
            if ($i != $a) {
                echo ", ";
            }
        }
    }
}
function cuentaAmpliacion($a, $b, $o = 1){
    if($o<1){
        echo "Asignacion de intervalo incorrecta";
    }else{
    if ($a < $b) {// b mayor
        for ($i = $a; $i <= $b; $i +=$o) {
            
                echo $i;
                if($i+$o > $b){

                }else{
                if ($i != $b) {
                    echo ", ";
                }
            }
            
        }
    } else { // a mayor
        for ($i = $b; $i <= $a; $i +=$o) {
           
                echo $i;
                if($i+$o > $a){
                }else{
                if ($i != $a) {
                    echo ", ";
                }

           
        }
    }
    }
}
}
function intercambia(&$a,&$b){
        $c=$b;
        $b=$a;
        $a=$c;
    }


function calculaDescuento($precio, $descuento = 0){
return $precio - ($precio/100*$descuento);
    }
?>