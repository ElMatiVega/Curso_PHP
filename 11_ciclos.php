<meta charset="utf-8" />
<?php

    echo "<br/>"."For."."<br/>";
    for($i=0;$i<5;$i++){
        echo "cicloFor ".$i."<br/>";
    }

   echo "<br/>"."Do While."."<br/>";

    $numDoWhile=0;

    do{
        echo "num_DoWhile".$numDoWhile."<br/>";;
        $numDoWhile++;
        
    }while( $numDoWhile<5);

    echo "<br/>"."While."."<br/>";
    $numWhile=0;
    while ($numWhile <= 5) {
        echo "num_While ".$numWhile."<br/>";
        $numWhile++;
    }
echo "<hr />"."<br/>"."Ejercicio WHILE victor robles"."<br/>";

/*Escribe un programa que multiplique los primeros 20 numeros naturales utilizando while. */

$numero = 1;
$contador = 2;

while ($contador <= 20) {
    $numero *= $contador;
    echo $numero."<br/>";
    $contador++;
}
echo "El resultado de multiplicar los 20 primeros números es: ".$numero;
    
?>