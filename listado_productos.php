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
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th style="text-align:center;">Accion</th> #style sirve para colocar estilos
                    </tr>

                    <tr>
                        <td><?php echo $aProductos[0]["nombre"];?></td>
                        <td><?php echo $aProductos[0]["marca"];?></td>
                        <td><?php echo $aProductos[0]["modelo"];?></td>
                        <td><?php echo $aProductos[0]["stock"]==0? "No hay Stock": ($aProductos[0]["stock"]>=10? "Hay stock":"Poco stock");?></td>
                        <td><?php echo $aProductos[0]["precio"];?></td>
                        <td><button class="bg-primary"> comprar </button></td>
                    </tr>

                    <tr>
                        <td><?php echo $aProductos[1]["nombre"];?></td>
                        <td><?php echo $aProductos[1]["marca"];?></td>
                        <td><?php echo $aProductos[1]["modelo"];?></td>
                        <td><?php echo $aProductos[1]["stock"]==0? "No hay Stock": ($aProductos[1]["stock"]>=10? "Hay stock":"Poco stock");?></td>
                        <td><?php echo $aProductos[1]["precio"];?></td>
                        <td><button class="bg-primary"> comprar </button></td>
                    </tr>

                    <tr>
                        <td><?php echo $aProductos[2]["nombre"];?></td>
                        <td><?php echo $aProductos[2]["marca"];?></td>
                        <td><?php echo $aProductos[2]["modelo"];?></td>
                        <td><?php echo $aProductos[2]["stock"]==0? "No hay Stock": ($aProductos[2]["stock"]>=10? "Hay stock":"Poco stock");?></td>
                        <td><?php echo $aProductos[2]["precio"];?></td>
                        <td><button class="bg-primary"> comprar </button></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


</body>
</html>