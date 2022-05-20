<<?php include('../templates/header.html'); ?>

<body>
<?php
    require('../config/conection.php');

    $aerolinea = strtolower($_POST["aerolinea"]);
    $query = "  SELECT *
                FROM(
                    SELECT nombre_pasajero,COUNT(numero_ticket) as numeros_de_ticket
                    FROM(
                        SELECT *
                        FROM pasajeros,(
                            SELECT *
                            FROM reservas,(
                                SELECT * 
                                FROM vuelos
                                WHERE lower(vuelos.nombre_compania) LIKE '%$aerolinea%'
                            )as vuelos
                            WHERE reservas.vuelo_id = vuelos.vuelo_id
                        ) as reservas
                        WHERE pasajeros.reserva_id = reservas.reserva_id
                    ) as tabla
                    GROUP BY nombre_pasajero 
                ) as tabla
                ORDER BY tabla.numeros_de_ticket DESC
    
    ;" ;

    $result = $db -> prepare($query);
    $result -> execute();
    $data = $result -> fetchAll();
?>
<table>
    <tr>
    <th>nombre_pasajero</th>
    <th>cantidad_de_tickets</th>  


    <?php 
    foreach($data as $vuelos){
        echo("<tr>
        <td>$vuelos[0]</td>
        <td>$vuelos[1]</td>
        </tr>");
        break;
    }
    ?>     
    </tr>

</table>
</body>
<?php include('../templates/footer.html')?>


