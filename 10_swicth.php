<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Elija una opción.</h1>
    <form action="10_swicth.php" method="post">
        <input type="submit" name="btnValor" value="1">
        <br/><br/>
        <input type="submit" name="btnValor" value="2">
        <br/><br/>
        <input type="submit" name="btnValor" value="3">
        <br/>
    </form>
</body>
</html>
<?php
    if($_POST){
        $boton=$_POST["btnValor"];
        switch($boton){
            case 1:
                echo "Usted presionó 1";
            break;
            case 2:
                echo "Usted presionó 2";
            break;
            case 3:
                echo "Usted presionó 3";
            break;
        }
    }
?>