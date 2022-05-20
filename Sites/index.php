<?php include("templates/header.html");?>
<body>

<h1 align ="center"> Vuelos</h1>
<p align ="center">Aquí encontraras toda la información de tus vuelos</p>
</br>

<!-- Primera consulta-->
<h3 align ="center">1-Vuelos pendientes para ser aprobados por la DGAC</p>
<form align ="center" action="queries/primera_consulta.php?" method = "post" >
  Estado del vuelo:
  <input type ="text" name = "estado">
  <input type="submit" value = "Buscar">

</form>
</br>
</br>
<!-- Segunda consulta-->

<h3 align ="center">2-Vuelos aceptados por aerolinea</p>
<form align ="center" action="queries/segunda_consulta.php?" method = "post" >
  ¿Cual es el código ICAO de la aerolinea?:
  <input type ="text" name = "codigo">
  </br>
  </br>
  ¿Cual es la Aerolinea de destino?:
  <select id="aerolinea" name="aerolinea">
    <option value="IBERIA">IBERIA</option>
    <option value="LATAM ECUADOR">LATAM ECUADOR</option>
    <option value="AEROVIAS DAP (centro/norte)">AEROVIAS DAP (centro/norte)</option>
    <option value="LAW">LAW</option>
    <option value="ETHOPIAN AIRLINES">ETHOPIAN AIRLINES</option>
    <option value="KALITTA AIR">KALITTA AIR</option>
    <option value="LACSA">LACSA</option>
    <option value="LATAM CARGO">LATAM CARGO</option>
    <option value="ALITALIA">ALITALIA</option>
    <option value="OCEANAIR">OCEANAIR</option>
    <option value="QANTAS">QANTAS</option>
    <option value="LATAM DOMESTICO">LATAM DOMESTICO</option>
    <option value="LATAM INTER">LATAM INTER</option>
    <option value="EASTERN AIRLINES">EASTERN AIRLINES</option>
    <option value="KOREAN AIR">KOREAN AIR</option>
    <option value="BRITISH">BRITISH</option>
    <option value="LATAM ARGENTINA">LATAM ARGENTINA</option>
    <option value="MARTINAIR HOLLAND">MARTINAIR HOLLAND</option>
    <option value="NO_COMPANY">NO_COMPANY</option>
    <option value="UNITED">UNITED</option>
  </select>
  <input type="submit" value = "Buscar">

</form>

<!-- Tercera consulta-->
</br>
<h3 align ="center">3-Tickets asociados</p>
<form align ="center" action="queries/tercera_consulta.php?" method = "post" >
  Codigo de reserva:
  <input type ="text" name = "codigo">
  <input type="submit" value = "Buscar">
</form>


<!-- Cuarta consulta-->
</br>
<h3 align ="center">4-El cliente con más cantidad de tickets según aerolinea</p>
<form align ="center" action="queries/cuarta_consulta.php?" method = "post" >
  ¿Cual es la Aerolinea que quieres saber?:
  <select id="aerolinea" name="aerolinea">
    <option value="IBERIA">IBERIA</option>
    <option value="LATAM ECUADOR">LATAM ECUADOR</option>
    <option value="AEROVIAS DAP (centro/norte)">AEROVIAS DAP (centro/norte)</option>
    <option value="LAW">LAW</option>
    <option value="ETHOPIAN AIRLINES">ETHOPIAN AIRLINES</option>
    <option value="KALITTA AIR">KALITTA AIR</option>
    <option value="LACSA">LACSA</option>
    <option value="LATAM CARGO">LATAM CARGO</option>
    <option value="ALITALIA">ALITALIA</option>
    <option value="OCEANAIR">OCEANAIR</option>
    <option value="QANTAS">QANTAS</option>
    <option value="LATAM DOMESTICO">LATAM DOMESTICO</option>
    <option value="LATAM INTER">LATAM INTER</option>
    <option value="EASTERN AIRLINES">EASTERN AIRLINES</option>
    <option value="KOREAN AIR">KOREAN AIR</option>
    <option value="BRITISH">BRITISH</option>
    <option value="LATAM ARGENTINA">LATAM ARGENTINA</option>
    <option value="MARTINAIR HOLLAND">MARTINAIR HOLLAND</option>
    <option value="NO_COMPANY">NO_COMPANY</option>
    <option value="UNITED">UNITED</option>
  </select>
  <input type="submit" value = "Buscar">

</form>

<!-- Quinta consulta-->

</br>
<h3 align ="center">5-Cantidad de vuelos en la aerolinea</p>
<form align ="center" action="queries/quinta_consulta.php?" method = "post" >
  ¿Cual es la Aerolinea que quieres saber?:
  <input type ="text" name = "aerolinea">
  <input type="submit" value = "Buscar">
</form>

<!-- Sexta consulta-->

</br>
<h3 align ="center">6-Aerolineas con más vuelos aceptados</p>
<form align ="center" action="queries/sexta_consulta.php?" method = "post" >
  <input type="submit" value = "Buscar">
</form>

</body>
</html>
