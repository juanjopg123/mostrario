<?php
$id3 = $_POST['id3'];
$imagen3 = $_POST['imagen3'];
$nombre3 = $_POST['nombre3'];
$descripcion3 = $_POST['descripcion3'];
$precio_compra3 = $_POST['precio_compra3'];
$categoria3 = $_POST['categoria3'];
$imagen13 = $_POST['imagen1-3'];
$imagen23 = $_POST['imagen2-3'];
$imagen33 = $_POST['imagen3-3'];

$host = "localhost";
$user = "id22158185_mostrariomuebles";
$pass = "Kenzo-1059";
$db = "id22158185_mostrariomuebles";

$conn = mysqli_connect($host, $user, $pass, $db);

$sql = "UPDATE esquineros SET imagen='$imagen3', nombre='$nombre3', descripcion='$descripcion3', precio_compra='$precio_compra3', categoria='$categoria3', imagen1='$imagen13', imagen2='$imagen23', imagen3='$imagen33' WHERE id='$id3'";

if (mysqli_query($conn, $sql)) {
    echo "Actualización exitosa";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
