
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Numeros Pares</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div>
                    <tr>
                        <h3>Lista de 100 numeros</h3>
                    </tr>

                    <?php
                    echo "<br>";
                    for ($i = 1; $i <= 100; $i++) {
                            
                        echo $i . "<br>";
                    }

                    ?>
                </div>

                <div>
                    
                </div>

            </div>

            <div class="col-sm-4">
                <div>
                    <tr>
                        <h3>Lista de 100 en numeros pares</h3>
                    </tr>

                    <?php
                    echo "<br>";
                    for ($i = 2; $i <= 100; $i+=2) {
                        
                        echo $i. "<br>";
                    }

                    ?>
                </div>

                <div>
                    
                </div>

            </div>

            <div class="col-sm-4">
                <div>
                    <tr>
                        <h3>Lista de 100 numeros hasta el 60</h3>
                    </tr>

                    <?php
                    echo "<br>";
                    for ($i = 1; $i<= 100; $i++) {

                        $bNum[$i] = $i;

                       if ($i == 60) {
                           break;
                       }
                        
                        echo $i. "<br>";
                            
                    }

                    ?>
                </div>

                <div>
                    
                </div>

            </div>

        </div>
    </div>
    
</body>

</html>