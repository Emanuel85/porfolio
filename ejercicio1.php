<?php

$a=rand(1,9);
$b=rand(1,9);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Ejercicio1</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                            
                <table class="table border text-center">
                    <thead>
                        <th>Calculadora de mayor y menor</th>
                    </thead>

                    <tbody>
                        <tr>
                            <td><?php echo "Primer numero ";?></td>
                            <td><?php echo "$a";?></td>
                        </tr>
                        
                        <tr>
                            <td><?php echo "Segundo numero ";?></td>
                            <td><?php echo "$b";?></td>
                        </tr>

                        <tr>
                        
                            <th> <?php
                            
                                echo $a==$b? "Los dos numeros son iguales" : ($a>$b? "El primer numero es mayor":"El segundo numero es mayor");
                            
                            ?> </th>

                        </tr>



                    </tbody>
                </table>    
            
            
            </div>
        </div>
    </div>





</body>
</html>