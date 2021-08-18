<?php
$aProductos = array();
$aProductos[] = array("nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000,
);
$aProductos[] = array("nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000,
);
$aProductos[] = array("nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000,
);

$suma = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sumar Total</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <thead>
                    <th> <h1 class="text-center"> Lista de Productos </h1></th>
                </thead>

                <tbody>
                    <table class="table border">
                        <tr>
                            <th> Nombre </th>
                            <th> Marca </th>
                            <th> Modelo </th>
                            <th> Stock </th>
                            <th> Precio </th>
                            <th> Accion </th>
                        </tr>
                        
                        <tr>
                            <?php
                            for ($i=0; $i < count($aProductos); $i++) { 
                                echo "<tr>";
                                echo "<td>". $aProductos[$i]["nombre"] . "</td>";
                                echo "<td>". $aProductos[$i]["marca"] . "</td>";
                                echo "<td>". $aProductos[$i]["modelo"] . "</td>";
                                echo $aProductos[$i]["stock"]==0? "<td> No hay stock </td>":($aProductos[$i]["stock"]>=10? " <td> Hay stock </td>": "<td> poco stock </td>");
                                echo "<td>". "$ " . $aProductos[$i]["precio"] . "</td>";
                                echo "<td> <button class='btn btn-primary'> comprar </button> </td>";
                                echo "</tr>";
                                //$suma=$suma + $aProductos[$i]["precio"];
                                $suma+=$aProductos[$i]["precio"];
                            }
                            ?>

                        </tr>

                        <tr>
                        <th> <h1 class="text-right"> <?php echo "El subtotal es : $". $suma; ?> </h1></th>
                        </tr>

                    </table>
                </tbody>


            </div>
        </div>
    </div>






</body>
</html>