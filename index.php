<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Productos</title>
    <style>
        body {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: auto;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>TAQUERÍA MARTOTA</h1>
    <?php
    $server = "localhost";
    $usuario = "root";
    $contraseña = "";
    $bd = "expo";
    $conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die ("Error en la conexión");

    $consulta = mysqli_query($conexion, "SELECT * FROM productos") or die ("Error al consultar registros");

    echo '<table>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>NOMBRE</th>';
    echo '<th>DESCRIPCIÓN</th>';
    echo '<th>PRECIO</th>';
    echo '</tr>';

    while ($extraido = mysqli_fetch_array($consulta))
    {
        echo '<tr>';
        echo '<td>'.$extraido['ID'].'</td>';
        echo '<td>'.$extraido['NOMBRE'].'</td>';
        echo '<td>'.$extraido['DESCRIPCION'].'</td>';
        echo '<td>'.$extraido['PRECIO'].'</td>';
        echo '</tr>';
    }

    mysqli_close($conexion);
    echo '</table>';
    ?>
    
</body>
</html>
