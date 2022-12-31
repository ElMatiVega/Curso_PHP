<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    
    <form action="8_OperadoresComparacionales.php" method="post">
        Comparamos usando >,<,==,>=,<=.<br/>
        ValorA:
        <input type="text" name="valorA" id=""><br/>
        ValorB:
        <input type="text" name="valorB" id=""><br/>
        <input type="submit" value="Calcular"><br/><br/>
    </form>
</body>
</html>

<?php
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];
    if($valorA > $valorB){
        echo "El valor A es mayor que el valor B";
    }elseif($valorB > $valorA){
        echo "El valor B es mayor que el valor A";
    }else{
        echo "Ambos valores son iguales";
    }
    
}

?>