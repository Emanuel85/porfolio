
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

$notas= array(9,8,9.5,4,7,8);

$pepito= array(1,2,3,4,5);


function contar($contarArray){

    $cont=0;

     foreach ($contarArray as $item){
                 
        $cont++;
    }

      return $cont;
        
}
echo contar($pepito) . "</br>";


?>

</body>
</html>