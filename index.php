<?php
include "conexion.php";
$conexion = conexion();

$sql = "SELECT * FROM pcAsignada";
$respuesta = mysqli_query($conexion, $sql)




?>

<html>
    <center>
<table border = "1">
    <thead>
        <tr>
            <th>Usuario</th>
            <th>hardware</th>
        </tr>
    </thead>
    <tbody>
        <?php while($ver = mysqli_fetch_array($respuesta)):?>
        <tr>
            <td><?php echo $ver ['usuario'] ?></td>
            <td><?php echo $ver ['Compu'] ?></td>
        </tr>

        <?php endwhile; ?>
    </tbody>
</table>
</center>
</html>