<?php
$id = $_POST['id'];
$imagen = $_POST['imagen'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio_compra = $_POST['precio_compra'];
$categoria = $_POST['categoria'];
$imagen1 = $_POST['imagen1'];
$imagen2 = $_POST['imagen2'];
$imagen3 = $_POST['imagen3'];


$host = "localhost";
$user = "id22158185_mostrariomuebles";
$pass = "Kenzo-1059";
$db = "id22158185_mostrariomuebles";

$conn = mysqli_connect($host,$user,$pass,$db);

$sql = ("UPDATE sofa SET imagen='".$imagen."', nombre='".$nombre."', descripcion='".$descripcion."', precio_compra='".$precio_compra."', categoria='".$categoria."', imagen1='".$imagen1."', imagen2='".$imagen2."', imagen3='".$imagen3."' WHERE id='".$id."'");



if (mysqli_query($conn,$sql)){
    echo "Actualización exitosa";
} else {
    echo "Error".mysql_error($sql);
}
?>