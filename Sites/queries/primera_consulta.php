<?php include('../templates/header.html'); ?>

<body>
<?php
    require('../config/conection.php');

    $estado = strtolower($_POST["estado"]); # Input usuario primera consulta
    $query = "SELECT * 
              FROM vuelos
              WHERE lower(vuelos.estado) LIKE '%$estado%';";

    $result = $db -> prepare($query);
    $result -> execute();
    $data = $result -> fetchAll();
?>
<table>
    <tr>
    <th>vuelo_id</th>
    <th>aerodromo_salida_id</th>  
    <th>aerodromo_llegada_id</th> 
    <th>ruta_id</th> 
    <th>codigo_aeronave</th> 
    <th>codigo_compania</th> 
    <th>fecha_salida</th> 
    <th>fecha_llegada</th> 
    <th>velocidad</th> 
    <th>altitud</th>
    <th>estado</th>
    <th>nombre_aeronave</th>
    <th>modelo</th>
    <th>peso</th>
    <th>valor</th>
    <th>nombre_compania</th>

    <?php 
    foreach($data as $vuelos){
        echo("<tr>
        <td>$vuelos[0]</td>
        <td>$vuelos[1]</td>
        <td>$vuelos[2]</td>
        <td>$vuelos[3]</td>
        <td>$vuelos[4]</td>
        <td>$vuelos[5]</td>
        <td>$vuelos[6]</td>
        <td>$vuelos[7]</td>
        <td>$vuelos[8]</td>
        <td>$vuelos[9]</td>
        <td>$vuelos[10]</td>
        <td>$vuelos[11]</td>
        <td>$vuelos[12]</td>
        <td>$vuelos[13]</td>
        <td>$vuelos[14]</td>
        <td>$vuelos[15]</td>
        </tr>");
    }
    ?>     
    </tr>

</table>
</body>
<?php include('../templates/footer.html')?>