<!DOCTYPE html>
<html>
<head>
    <title>Formulario GET</title>
</head>
<body>

<h2>Formulario GET</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
    <label for="dato">Ingrese un dato:</label><br>
    <input type="text" id="dato" name="dato"><br><br>
    <input type="submit" value="Enviar">
</form>

<?php
if (isset($_GET["dato"])) {
    $dato_recibido = $_GET["dato"];
    echo "<h3>Dato enviado:</h3>";
    echo "El dato ingresado es: " . htmlspecialchars($dato_recibido);
}
?>

</body>
</html>
