<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    
    <form action="7_Operadores.php" method="post">
        Ingrese valores a sumar.<br/>
        <input type="text" name="valorA" id=""><br/>
        <input type="text" name="valorB" id=""><br/>
        <input type="submit" value="Calcular"><br/><br/>
    </form>
</body>
</html>

<?php
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];
    $suma=$valorA+$valorB;
    echo "<br/>".$suma;
}

?>