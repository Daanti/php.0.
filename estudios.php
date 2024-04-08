<?php

/* $numero1 = 100;

if($numero1 > 0 && $numero1 < 100){
    echo "soy mayor a cero y menor de 100";
}

elseif($numero1 >= 100){
     echo "soy mayor que 100";
}

else{
    echo "No soy mayor de cero";
} */

/* $numero1 = 0;
$numero2 = 3;
$numero3 = 2;

if ($numero1 > $numero2) {
    echo "$numero1 es mayor que $numero2";
}elseif ($numero1 < $numero2) {
    if($numero2 > $numero3){

        echo "$numero2 es mayor que $numero3 el valor de $numero2 es: " . $numero2 . "<br>" ;
        
        if($numero3 > $numero1){
            echo "tambien $numero3 es mayor que $numero1";
        }
        else {
            echo "tambien $numero1 es mayor que $numero3";
        }
    }

    else{
        echo "numero 2 no es mayor que numero 3";
    }
}


else {
    # code...
} */

$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$multip = $numero1 * $numero2;
$response = "";

if ($numero1 * $numero2 == 0) {
    echo "El resultado ha sido : $multip. Por favor repita el proceso :) " ."<br>";
} else {
}

if ($numero1 == $numero2) {
    echo "Ambos numeros son iguales" . "<br>";
} elseif ($numero1 > $numero2) {
    echo "$numero1 es mayor que $numero2" . "<br>";
} else {
    echo "$numero2 es mayor que $numero1" . "<br>";
}

if ($numero1 * $numero2) {
    echo "El resultado de $numero1 multiplicado por $numero2 es: " . $numero1 * $numero2 . "<br>";
} else {
}

if ($multip >= 100) {
    echo "El resultado ha sido igual o mayor a 100 :" . $multip . "<br>";
} elseif ($multip < 50 && $multip != 0) {
    echo "El resultado ha sido : $multip. ¡Sorpresa! ha sido menor de 50. ¡Usted obtiene un bono!" . "<br>";
} else {
}

if ($multip < 10 && $multip != 0) {
    echo "El resultado ha sido : $multip ¡USTED OBTIENE UN REGALO!" . "<br>";
} else {
}
