<!DOCTYPE html>
<html>
<head>
    <title>Formulario GET</title>
</head>
<body>
<?php
// Verifica si se ha enviado el formulario y muestra el texto recibido
if (isset($_GET['texto'])){
    $texto = $_GET['texto'];
    echo "Texto recibido es: " . $texto . "<br>";
}
?>

<form method="GET" action="">
    <label for="texto"> Introduce tu texto:</label>
    <input type="text" id="texto" name="texto">
    <button type="submit">ENVIAR</button>
</form>

</body>
</html>
