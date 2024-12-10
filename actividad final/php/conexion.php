<?php
$conn = mysqli_connect('localhost', 'adrian', 'Adrian_123', 'tienda_novelas');
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
