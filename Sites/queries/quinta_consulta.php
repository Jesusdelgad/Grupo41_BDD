<<?php include('../templates/header.html'); ?>

<body>
<?php
    require('../config/conection.php');

    $aerolinea = strtolower($_POST["aerolinea"]);
    $query = "SELECT estado,count(vuelo_id) as cantidad_de_vuelos
              FROM (
                SELECT nombre_compania,estado,vuelo_id
                FROM vuelos
                WHERE lower(vuelos.nombre_compania) LIKE '%$aerolinea%'
              ) as tabla
              GROUP BY tabla.estado ;" ;
    $texto = "Cantidad de vuelos de ";
    print_r($texto);
    print_r($_POST["aerolinea"]);
    $result = $db -> prepare($query);
    $result -> execute();
    $data = $result -> fetchAll();
?>
</br>
<table>
    <tr>
    <th>estado</th>
    <th>cantidad_de_vuelos</th>  


    <?php 
    foreach($data as $vuelos){
        echo("<tr>
        <td>$vuelos[0]</td>
        <td>$vuelos[1]</td>
        <td>$vuelos[2]</td>
        <td>$vuelos[3]</td>
        </tr>");
    }
    ?>     
    </tr>

</table>
</body>
<?php include('../templates/footer.html')?>


