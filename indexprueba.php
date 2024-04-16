<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <style>
        h1 {
            font-size: 250%;
        }

        h3 {
            text-align: center;
            color: white;
        }

        body {
        
            background-size: cover;
            background-position: right top;
        }

        .table1 {

            border: 5px;
            border-radius: 5px;
            border-collapse: collapse;
            border-style: inherit;
            width: 50%;
            margin-left: 23.5%;
            padding: 1%;
        }

        .table {

            border: 8px;
            border-collapse: collapse;
            border-color: black;
            border-style: inset;
            margin: 20px auto;
        }

        td {
            width: 85px;
            height: 73px;
            border: 2px;
        }

        .blanco {
            background-color: white;
        }

        .amarillo {
            background-color: yellow;
        }

        .rojo {
            background-color: red;
        }

        .azul {
            background-color: blue;
        }

        .verde {
            background-color: green;
        }

        .ficha {
            border-radius: 50%;
            width: 80%;
            height: 80%;
            margin: auto;
        }

        .contenedor {
            display: flex;
            justify-content: space-between;
        }

        .jugador1,
        .jugador2 {
            flex: 1;

        }

        .titulo {
    
            font-size: 250%;
            text-align: center;
        }
    </style>
</head>

<body>
 
    <div class="container">
    <div class="table1">
    <table class="table" id="table">
        <?php
        $filas = 10;
        $columnas = 10;
        $contador = 1;

        $paleta_colores = ['rojo', 'azul', 'amarillo', 'verde', 'blanco'];

        $colores_filas = [];

        // Generar colores aleatorios para cada fila
        for ($i = 0; $i < $filas; $i++) {

            // Barajar la paleta de colores
            shuffle($paleta_colores);

            // Asignar los colores barajados a las filas
            $colores_filas[] = $paleta_colores;
        }

        // Recorrer las filas y columnas para imprimir la tabla
        for ($fila = 0; $fila < $filas; $fila++) {
            echo "<tr>";

            // Recorrer las columnas
            for ($columna = 0; $columna < $columnas; $columna++) {

                // Obtener el color para esta celda
                $color = $colores_filas[$fila][$columna % count($paleta_colores)];
                
                // Imprimir la celda con el color correspondiente
                echo "<td class='$color'>";
                echo '<span class="numero">' . $contador-- . '</span>';
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>







</body>

</html>