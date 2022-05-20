<?php include('../templates/header.html'); ?>
<body>
<?php
    require('../config/conection.php');

    $codigo = strtolower($_POST["codigo"]); # Input usuario primera consulta
    $query = "SELECT *
              FROM vuelos,(
                SELECT *
                FROM pasajeros,(
                    SELECT reserva_id,codigo_reserva,vuelo_id
                    FROM reservas
                    WHERE lower(reservas.codigo_reserva) LIKE '%$codigo%'
                ) as reservas
                WHERE pasajeros.reserva_id = reservas.reserva_id
              ) as pasajeros
              WHERE pasajeros.vuelo_id = vuelos.vuelo_id;
              ";

    $result = $db -> prepare($query);
    $result -> execute();
    $data = $result -> fetchAll();
?>
<table>
    <tr>
    <th>codigo_reserva</th>
    <th>nombre_pasajero</th>
    <th>nacionalidad_pasajero</th>  
    <th>fecha_nacimiento_pasajero</th> 
    <th>numero_pasajero</th>
    <th>valor</th> 

    <?php 
    foreach($data as $vuelos){
        echo("<tr>
        <td>$vuelos[27]</td> 
        <td>$vuelos[22]</td>
        <td>$vuelos[23]</td>
        <td>$vuelos[24]</td>
        <td>$vuelos[25]</td>
        <td>$vuelos[14]</td>

        </tr>");
    }
    ?>     
    </tr>

</table>
</body>
<?php include('../templates/footer.html')?>
