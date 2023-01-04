<?php
//apellido lo declaro por default vacio para que cuando  llame a la funcion y no se complete con un apellido no se rompa la funcion.
    function imprimirNombre($nombre, $apellido=""){
        echo "Hola ".$nombre." ".$apellido."<br/>";
    }

    imprimirNombre("Matías");
?>