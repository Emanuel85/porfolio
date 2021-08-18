
<?php
$pesoCamion=rand(800,1500);
$pesoSolicitado=1120;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Ejercicio2</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class=" table border text-center">
                    <thead>
                        <th><?php echo"Validador de peso";?></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo "Peso de camion $pesoCamion"?></td>
                        </tr>
                        <tr>
                            <td><?php echo $pesoCamion>=$pesoSolicitado? "Peso excedido" : "Peso Permitido"?></td>
                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>


    
</body>
</html>