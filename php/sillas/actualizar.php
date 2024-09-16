<?php
$id5 = $_POST['id5'];
$imagen5 = $_POST['imagen5'];
$nombre5 = $_POST['nombre5'];
$descripcion5 = $_POST['descripcion5'];
$precio_compra5 = $_POST['precio_compra5'];
$categoria5 = $_POST['categoria5'];
$imagen15 = $_POST['imagen1-5'];
$imagen25 = $_POST['imagen2-5'];
$imagen35 = $_POST['imagen3-5'];


$host = "localhost";
$user = "id22158185_mostrariomuebles";
$pass = "Kenzo-1059";
$db = "id22158185_mostrariomuebles";

$conn = mysqli_connect($host,$user,$pass,$db);

$sql = ("UPDATE sillas SET imagen='".$imagen5."', nombre='".$nombre5."', descripcion='".$descripcion5."', precio_compra='".$precio_compra5."', categoria='".$categoria5."', imagen1='".$imagen15."', imagen2='".$imagen25."', imagen3='".$imagen35."' WHERE id='".$id5."'");



if (mysqli_query($conn,$sql)){
    echo "Actualización exitosa";
} else {
    echo "Error".mysql_error($sql);
}
?>