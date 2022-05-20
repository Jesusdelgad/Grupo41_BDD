<<?php include('../templates/header.html'); ?>

<body>
<?php
    require('../config/conection.php');

    $aerolinea = "aceptado";
    $query = "SELECT *
              FROM(
                SELECT nombre_compania,count(estado) as vuelos_aceptados
                FROM vuelos
                WHERE lower(vuelos.estado) LIKE '%$aerolinea%'
                GROUP BY nombre_compania 
              ) as tabla 
              ORDER BY tabla.vuelos_aceptados DESC;" ;

    $result = $db -> prepare($query);
    $result -> execute();
    $data = $result -> fetchAll();
?>
</br>
<table>
    <tr>
    <th>aeronlínea</th>
    <th>cantidad_de_vuelos_aceptados</th>  


    <?php 
    foreach($data as $vuelos){
        echo("<tr>
        <td>$vuelos[0]</td>
        <td>$vuelos[1]</td>
        <td>$vuelos[2]</td>
        <td>$vuelos[3]</td>
        </tr>");
        break;
    }
    ?>     
    </tr>

</table>
</body>
<?php include('../templates/footer.html')?>

