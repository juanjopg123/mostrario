<?php
$id4 = $_POST['id4'];
$imagen4 = $_POST['imagen4'];
$nombre4 = $_POST['nombre4'];
$descripcion4 = $_POST['descripcion4'];
$precio_compra4 = $_POST['precio_compra4'];
$categoria4 = $_POST['categoria4'];
$imagen14 = $_POST['imagen1-4'];
$imagen24 = $_POST['imagen2-4'];
$imagen34 = $_POST['imagen3-4'];


$host = "localhost";
$user = "id22158185_mostrariomuebles";
$pass = "Kenzo-1059";
$db = "id22158185_mostrariomuebles";

$conn = mysqli_connect($host,$user,$pass,$db);

$sql = ("UPDATE camas SET imagen='".$imagen4."', nombre='".$nombre4."', descripcion='".$descripcion4."', precio_compra='".$precio_compra4."', categoria='".$categoria4."', imagen1='".$imagen14."', imagen2='".$imagen24."', imagen3='".$imagen34."' WHERE id='".$id4."'");



if (mysqli_query($conn,$sql)){
    echo "Actualización exitosa";
} else {
    echo "Error".mysql_error($sql);
}
?>