<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

function calcularNeto($bruto){

    return $bruto -($bruto*0.17);

}
echo "El sueldo neto es ". calcularNeto(50000)."</br>";


?>

</body>
</html>