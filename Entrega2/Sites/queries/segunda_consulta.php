<<?php include('../templates/header.html'); ?>

<body>
<?php
    require('../config/conection.php');

    $estado = $_POST["estado"]; # Input usuario primera consulta
    $query = "SELECT * 
              FROM vuelos
              WHERE lower(vuelos.estado) LIKE '%$estado%';";

    $result = $db -> prepare($query);
    $result -> execute();
    $data = $result -> fetchAll();
?>
<table>
    <tr>
    <th>1</th>
    <th>2</th>  
    <th>3</th> 
    <th>4</th> 
    <th>5</th> 
    <th>6</th> 
    <th>7</th> 
    <th>8</th> 
    <th>9</th> 
    <th>10</th>
    <th>11</th>
    <th>12</th>

    <?php 
    foreach($data as $vuelos){
        echo("<tr><td>$vuelos[0]</td>
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
        </tr>");
    }
    ?>     
    </tr>

</table>
</body>
<?php include('../templates/footer.html')?>