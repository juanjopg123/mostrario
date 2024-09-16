<?php
$id7 = $_POST['id7'];
$imagen7 = $_POST['imagen7'];
$nombre7 = $_POST['nombre7'];
$descripcion7 = $_POST['descripcion7'];
$precio_compra7 = $_POST['precio_compra7'];
$categoria7 = $_POST['categoria7'];
$imagen17 = $_POST['imagen1-7'];
$imagen27 = $_POST['imagen2-7'];
$imagen37 = $_POST['imagen3-7'];

$host = "localhost";
$user = "id22158185_mostrariomuebles";
$pass = "Kenzo-1059";
$db = "id22158185_mostrariomuebles";

$conn = mysqli_connect($host,$user,$pass,$db);

$sql = ("UPDATE espaldares SET imagen='".$imagen7."', nombre='".$nombre7."', descripcion='".$descripcion7."', precio_compra='".$precio_compra7."', categoria='".$categoria7."', imagen1='".$imagen17."', imagen2='".$imagen27."', imagen3='".$imagen37."' WHERE id='".$id7."'");

if (mysqli_query($conn,$sql)){
    echo "Actualización exitosa";
} else {
    echo "Error".mysql_error($sql);
}
?>