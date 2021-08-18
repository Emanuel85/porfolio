<?php

$hr = 21;
$min = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Minutero</title>
</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-12">

                <table class="table border ">

                    <thead style="text-align:center">
                        <th>
                            <h1> Minutero</h1>
                        </th>
                    </thead>

                    <tbody>

                        <?php

                        for ($i = 0; $i <= 60; $i++) { #50

                            $min++; #60

                            if ($min == 60) {

                                $hr++; #22
                                $min = 0;
                                $i = 0;
                            }
                            if ($hr == 24) {

                                $hr = 0;
                            }
                            if ($hr == 0 && $min == 20) {

                                break;
                            }

                            if ($min < 10 || $min == 0) {
                                
                                echo "<tr>";
                                echo "<td> <h4> La hora es $hr:0$min </h4> </td>";
                                echo "</tr>";
                            } else {
                                echo "<tr>";
                                echo "<td> <h4> La hora es $hr:$min </h4> </td>";
                                echo "</tr>";
                            }

                            
                        }

                        ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</body>

</html>