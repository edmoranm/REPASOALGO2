<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Serpientes y Escaleras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .ficha {
            width: 60px;
            height: 60px;
            border: solid;
            text-align: center;
            line-height: 60px;
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <?php
    $jugador1casillaAcumulado = 0;
    $dado = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dado = rand(1, 12);
        $valorantiguo = isset($_POST['valor']) ? $_POST['valor'] : 0;
        $jugador1casillaAcumulado = $valorantiguo + $dado;

        switch ($jugador1casillaAcumulado) {
            case 2:
                $jugador1casillaAcumulado = 67;
                $mensaje = "USTED CAYÓ EN LA CASILLA 2 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 67";
                break;
            case 8:
                $jugador1casillaAcumulado = 29;
                $mensaje = "USTED CAYÓ EN LA CASILLA 8 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 29";
                break;
            case 86:
                $jugador1casillaAcumulado = 96;
                $mensaje = "USTED CAYÓ EN LA CASILLA 86 POR LO QUE SUBIÓ POR LA ESCALERA A LA CASILLA 96";
                break;
            case 23:
                $jugador1casillaAcumulado = 18;
                $mensaje = "USTED CAYÓ EN LA CASILLA 23 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 18";
                break;
            case 99:
                $jugador1casillaAcumulado = 27;
                $mensaje = "USTED CAYÓ EN LA CASILLA 99 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 27";
                break;
            case 90:
                $jugador1casillaAcumulado = 48;
                $mensaje = "USTED CAYÓ EN LA CASILLA 90 POR LO QUE BAJÓ POR LA SERPIENTE A LA CASILLA 48";
                break;
            default:
                if ($dado > 1) {
                    $mensaje = "USTED AVANZÓ $dado CASILLAS";
                } else {
                    $mensaje = "USTED AVANZÓ $dado CASILLA";
                }
                break;
        }
    }
    ?>
    <div class="container text-center">
        <h1>JUEGO DE SERPIENTES Y ESCALERAS</h1>
        <div class="row justify-content-center">
            <div class="col-lg-6 mt-4">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="mb-3">
                        <label for="valor" class="form-label">ACUMULADO</label>
                        <input type="text" class="form-control" id="valor" name="valor" value="<?= $jugador1casillaAcumulado ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="dado" class="form-label">DADO</label>
                        <input type="text" class="form-control" id="dado" name="dado" value="<?= $dado ?>" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">TIRAR</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-6">
                <?php if ($dado > 0) : ?>
                    <div class="alert alert-info" role="alert">
                        <h4 class="alert-heading">Resultado del Tiro</h4>
                        <p><?= $mensaje ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-6">
                <table class="table table-bordered">
                    <?php
                    $colores = ['yellow', 'white', 'red', 'blue', 'green'];
                    $NoCasilla = 100;
                    $coloranterior = '';
                    for ($fila = 0; $fila < 10; $fila++) {
                        echo "<tr>";
                        for ($columna = 0; $columna < 10; $columna++) {
                            echo "<td>";
                            $colorquetoca = rand(0, 4);
                            while ($colorquetoca == $coloranterior) {
                                $colorquetoca = rand(0, 4);
                            }
                            $coloranterior = $colorquetoca;
                            $NoCasilla--;
                            if ($NoCasilla == $jugador1casillaAcumulado) {
                                echo "<div class='ficha' style='background-color:$colores[$colorquetoca]'>J1</div>";
                            } else {
                                echo "<div class='ficha' style='background-color:$colores[$colorquetoca]'>$NoCasilla</div>";
                            }
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-6">
                <img src="klipartz.com.png" alt="imagen1" style="margin-top: -60px; margin-left: -170px; position: absolute;">
                <!-- Aquí puedes agregar más imágenes como la ficha del jugador o el inicio del juego -->
            </div>
        </div>
    </div>
</body>

</html>
