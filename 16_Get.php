<?php
/*Imprimir por pantalla la tabla de multiplicar de un número pasado en un parametro GET por URL */

var_dump($_GET);



if (isset($_GET["numero"]) && is_numeric($_GET["numero"])) {
    $numero=$_GET["numero"];
}else {
    $numero=5;
    echo "<p>Numero por defecto</p>";
}

echo  "<h2>Tabla de multiplcar del".$numero."</h2>";

for($i = 1; $i <= 10;$i++){
    echo $i." * ".$numero." = ".($i*$numero)."<br/>";
}
?>
