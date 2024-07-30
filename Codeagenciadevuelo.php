'Script PHP insertar Vuelo'
<?php
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "AGENCIA";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha = $_POST['fecha'];
$plazas = $_POST['plazas'];
$precio = $_POST['precio'];

$sql = "INSERT INTO VUELO (origen, destino, fecha, plazas_disponibles, precio) VALUES ('$origen', '$destino', '$fecha', '$plazas', '$precio')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo vuelo agregado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
