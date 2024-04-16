<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<style>
    .fondo{
        background-color: greenyellow;
    }

</style>

<body class="fondo">
    <?php
    $jugador1casillaAcumulado = 0;
    $dado = 0;
    $filaActual = 0;
    if (isset($_POST['valor'])) {
        $dado = $vrandom = rand(1, 12);
        $valorantiguo = $_POST['valor'];
        $jugador1casillaAcumulado = $valorantiguo + $dado;

        switch ($jugador1casillaAcumulado) {
            case '33':
                $jugador1casillaAcumulado = 70;
                $mensaje = "USTED CAYO EN LA CASILLA 33 POR LO QUE SUBIO POR LA ESCALERA A LA CASILLA 70";
                $alerta = 1;
                echo $mensaje;
                break;
            case '85':
                $jugador1casillaAcumulado = 74;
                $mensaje = "USTED CAYO EN LA CASILLA 74 POR LO QUE SUBIO POR LA ESCALERA A LA CASILLA 85";
                $alerta = 1;
                echo $mensaje;
                break;
            case '32':
                $jugador1casillaAcumulado = 13;
                $mensaje = "USTED CAYO EN LA CASILLA 13 POR LO QUE SUBIO POR LA ESCALERA A LA CASILLA 32";
                $alerta = 1;
                echo $mensaje;
                break;
            case ' 77':
                $jugador1casillaAcumulado = 97;
                $mensaje = "USTED CAYO EN LA CASILLA 97 POR LO QUE BAJO POR LA SERPIENTE A LA CASILLA 77";
                $alerta = 1;
                echo $mensaje;
                break;
            case '72':
                $jugador1casillaAcumulado = 90;
                $mensaje = "USTED CAYO EN LA CASILLA 90 POR LO QUE BAJO POR LA SERPIENTE A LA CASILLA 72";
                $alerta = 1;
                echo $mensaje;
                break;
            case '55':
                $jugador1casillaAcumulado = 25;
                $mensaje = "USTED CAYO EN LA CASILLA 55 POR LO QUE BAJO POR LA SERPIENTE A LA CASILLA 25";
                $alerta = 1;
                echo $mensaje;
                break;


            default:
                if ($dado > 1) {
                    $mensaje = "USTED AVANZO $dado CASILLAS";
                } else {
                    $mensaje = "USTED AVANZO $dado CASILLAS";
                }
                $alerta = 1;
                break;
        }
    }
    ?>
    <div class="container" style="text-align:center; color:blue; text-shadow:black">

        <h1>SERPIENTES Y ESCALERAS </h1>
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <div class="col-1g-6 mt-6">

                        <form action="tablero.php" method="post">
                            <div class="row">
                                <div class="col-1g-4">
                                    <label class="form-label" for="valor">ACUMULADO</labe><input class="form-control" type="text" id="valor" name="valor" min="1" max="10" value="<?= $jugador1casillaAcumulado ?>" required>
                                </div>
                                <div class="col-1g-4">
                                    <label class="form-label" for="dado">DADO</labe><input class="form-control" type="text" id="dado" name="dado" min="1" max="10" value="<?= $dado ?>" required>
                                        <imput type="hidden" name="Nojugada">
                                </div>
                                <div class="col-1g-4">

                                    <input type="submit" id="enviar" name="enviar" class="btn btn-primary" value="TIRAR">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-1g-4">
                                    <a href="tablero.php" id="enviar" name="enviar" class="btn btn-secondary">REINICIAR</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mt-5">
                        <?php
                        if ($dado > 0) {

                        ?>
                            <div style="border:solid; color:red">
                                <?php
                                if ($jugador1casillaAcumulado < 100) {
                                ?>
                                    <h1>TIRO</h1>
                                    <h1><?= $dado ?></h1>

                                    <h2><?= $mensaje ?></h2>
                            </div>
                        <?php } else {
                        ?>
                            <h1>FELICIDADES GANASTE</h1>
                    </div>
            <?php
                                }
                            } ?>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-6">
            <img src="./klipartz.com.png" alt="" style="z-index:2; margin-top:50px; margin-left:-180px; position:absolute;
            width:100px; height:100px; transform:rotate(-30deg)">
            <img src="./klipartz.com.png" alt="" style="z-index:2; margin-top: 60px; margin-left:160px; position: absolute;
            width:100px; height:100px; transform: rotate(20deg)">
            <img src="./klipartz.com.png" alt="" style="z-index:2; margin-top: 300px; margin-left:-170px; position:absolute;
            width:200px; height:200px; transform:rotate(-10deg)">
            <img src="./escalera.png" alt="" style="z-index:2; margin-top: 400px; margin-left:120px; position: absolute;
            width:100px; height:150px; transform: rotate(30deg)">
            <table class="tablero" style="z-index: 1;">
                <img src="./escalera.png" alt="" style="z-index:2; margin-top: 140px; margin-left:190px; position: absolute;
                width:50px; height:300px; transform: rotate(35deg)">

                <img src="./escalera.png" alt="" style="z-index:2; margin-top: 10px; margin-left:-10px; position: absolute;
                width:100px; height:200px; transform: rotate(-60deg)">
            </table>

            <?php
            if ($jugador1casillaAcumulado == 0) {


            ?>
                <img src="./ficha.png" alt="" style="z-index:2; width:60px; height:50px; margin-top:555px;
                        margin-left:-400px; position:absolute;">
                <img src="./ficha.png" alt="" style="z-index:2; width:60px; height:50px; margin-top:555px;
                        margin-left:-400px; position:absolute;">
            <?php
            }
            ?>
            <table class="tablero" style="z-index: 1;">
                <?php
                $colores = ['yellow', 'white', 'red', 'blue', 'green'];
                $NoCasilla = 101;
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

                        if ($fila > 0) {
                            if ($columna == 0) {
                                $NoCasilla -= 10;
                            } else {
                                if ($fila % 2 == 0) {
                                    $NoCasilla--;
                                } else {
                                    $NoCasilla++;
                                }
                            }
                        } else {
                            $NoCasilla--;
                        }

                        if ($jugador1casillaAcumulado == $NoCasilla && $jugador1casillaAcumulado > 0 && $jugador1casillaAcumulado < 101) {
                            echo "<div class='ficha' style='width: 60px; height: 60px; border: solid; background-color: $colores[$colorquetoca]'><img src='./ficha.png' alt='' style='z-index: 2; width: 60px; height: 60px;'></div>";
                        } else {
                            echo "<div class='ficha' style='width: 60px; height: 60px; border: solid; background-color: $colores[$colorquetoca]'><p>$NoCasilla</p></div>";
                        }
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>