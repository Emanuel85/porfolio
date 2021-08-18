<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

function calcularAreaRec($base,$altura){

    return $base*$altura;

}
echo "El area es ". calcularAreaRec(100,0.60)."</br>";
echo "El area es ". calcularAreaRec(800,300);

?>


</body>
</html>