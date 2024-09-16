<?php
$id6 = $_POST['id6'];
$imagen6 = $_POST['imagen6'];
$nombre6 = $_POST['nombre6'];
$descripcion6 = $_POST['descripcion6'];
$precio_compra6 = $_POST['precio_compra6'];
$categoria6 = $_POST['categoria6'];
$imagen16 = $_POST['imagen1-6'];
$imagen26 = $_POST['imagen2-6'];
$imagen36 = $_POST['imagen3-6'];

$host = "localhost";
$user = "id22158185_mostrariomuebles";
$pass = "Kenzo-1059";
$db = "id22158185_mostrariomuebles";

$conn = mysqli_connect($host,$user,$pass,$db);

$sql = ("UPDATE comedores SET imagen='".$imagen6."', nombre='".$nombre6."', descripcion='".$descripcion6."', precio_compra='".$precio_compra6."', categoria='".$categoria6."', imagen1='".$imagen16."', imagen2='".$imagen26."', imagen3='".$imagen36."' WHERE id='".$id6."'");

if (mysqli_query($conn,$sql)){
    echo "Actualización exitosa";
} else {
    echo "Error".mysql_error($sql);
}
?>