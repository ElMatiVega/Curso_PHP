<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html y php</title>
</head>
<body>
    <h2>Utilizo un formulrio en html y muestro los datos en php, metodo Post.Concateno variables.</h2><br/>
    <form action="4_concatVariables.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id=""><br/>
        Apellido:
        <input type="text" name="txtApellido" id=""><br/>
        <input type="submit" value="Enviar"><br/><br/>
    </form>
</body>
</html>

<?php
if($_POST){
    $nombre=$_POST['txtNombre'];
    $apellido=$_POST['txtApellido'];
    echo "Hola ".$nombre." ".$apellido;
}

?>