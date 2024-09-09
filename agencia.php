<!DOCTYPE html>
<html>
<head>
    <title>Reserva de Viaje</title>
</head>
<body>
    <h2>Formulario de Reserva</h2>
    <form action="procesar.php" method="post">
        <label for="id_cliente">ID Cliente:</label><br>
        <input type="text" id="id_cliente" name="id_cliente"><br><br>
        <label for="fecha_reserva">Fecha de Reserva:</label><br>
        <input type="date" id="fecha_reserva" name="fecha_reserva"><br><br>
        <label for="id_vuelo">ID Vuelo:</label><br>
        <input type="text" id="id_vuelo" name="id_vuelo"><br><br>
        <label for="id_hotel">ID Hotel:</label><br>
        <input type="text" id="id_hotel" name="id_hotel"><br><br>
        <input type="submit" value="Reservar">
    </form>
</body>
</html>
