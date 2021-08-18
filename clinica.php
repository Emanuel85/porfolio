<?php
$aProductos = array();
$aProductos[] = array("DNI" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.5,

);
$aProductos[] = array("DNI" => "23.684.385",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 45,
    "peso" => 65,

);
$aProductos[] = array("DNI" => "23.871.247",
    "nombre" => "Juan Irraola",
    "edad" => 66,
    "peso" => 74,

);

$aProductos[] = array("DNI" => "11.776.633",
    "nombre" => "Rosalia Rodriguez",
    "edad" => 75,
    "peso" => 92.5,

);

$aProductos[] = array("DNI" => "43.765.012",
    "nombre" => "Beatriz Ocampo",
    "edad" => 25,
    "peso" => 81.5,

);

$aProductos[] = array("DNI" => "12.765.012",
    "nombre" => "Ricardo Morone",
    "edad" => 62,
    "peso" => 68,

);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Listado de Productos</title>
</head>

<body>
    
    <div class="container">
        <div class="row">
            <table class="table border">
                <thead> <h1 class="text-center">Listado de Productos</h1></thead>
                <tbody>
                    <tr>
                        
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Peso</th>
                        
                    </tr>

                    <tr>
                        <?php
                        for ($i=0; $i < count($aProductos); $i++) { 
                           
                            echo "<tr>";
                            echo "<td>" . $aProductos[$i]["DNI"] . "</td>";
                            echo "<td>" . $aProductos[$i]["nombre"] . "</td>";
                            echo "<td>" . $aProductos[$i]["edad"] . "</td>";
                            echo "<td>" . $aProductos[$i]["peso"] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


</body>
</html>