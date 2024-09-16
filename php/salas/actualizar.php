<?php
$id2 = $_POST['id2'];
$imagen2 = $_POST['imagen2'];
$nombre2 = $_POST['nombre2'];
$descripcion2 = $_POST['descripcion2'];
$precio_compra2 = $_POST['precio_compra2'];
$categoria2 = $_POST['categoria2'];
$imagen12 = $_POST['imagen1-2'];
$imagen22 = $_POST['imagen2-2'];
$imagen32 = $_POST['imagen3-2'];

$host = "localhost";
$user = "id22158185_mostrariomuebles";
$pass = "Kenzo-1059";
$db = "id22158185_mostrariomuebles";

$conn = mysqli_connect($host,$user,$pass,$db);

$sql = ("UPDATE salas SET imagen='".$imagen2."', nombre='".$nombre2."', descripcion='".$descripcion2."', precio_compra='".$precio_compra2."', categoria='".$categoria2."', imagen1='".$imagen12."', imagen2='".$imagen22."', imagen3='".$imagen32."' WHERE id='".$id2."'");

if (mysqli_query($conn,$sql)){
    echo "Actualización exitosa";
} else {
    echo "Error".mysql_error($sql);
}
?>