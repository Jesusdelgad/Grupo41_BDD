<?php include("templates/header.html");?>
<body>

<h1 align ="center"> Vuelos</h1>
<p align ="center"> Aquí encontraras toda la información de tus vuelos</p>
</br>

<!-- Primera consulta-->
<h3 align ="center"> Vuelos pendientes para ser aprobados por la DGAC</p>
<form align ="center" action="queries/primera_consulta.php?" method = "post" >
  Estado del vuelo:
  <input type ="text" name = "estado">
  <input type="submit" value = "Buscar">

</form>
</br>
</br>
<!-- Segunda consulta-->
<h3 align ="center"> Vuelos aceptados por aerolinea</p>
<form align ="center" action="queries/segunda_consulta.php?" method = "post" >
  ¿Cual es el código ICAO de la aerolinea?:
  <input type ="text" name = "codigo">
  </br>
  </br>
  ¿Cual es la Aerolinea de destino?:
  <input type ="text" name = "aerolinea">
  <input type="submit" value = "Buscar">

</form>



</body>

</html>
