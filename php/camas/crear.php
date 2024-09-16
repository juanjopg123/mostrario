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
// if(!$conn){
//     die("Error al conectar".mysqli_connect_error());
// }else {
//     echo "Conexión";
// }
$fileinfo = pathinfo($_FILES["image"]["name"]);
$newfilename = $fileinfo['filename'] . "_" . time() . "." . $fileinfo['extension'];
move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newfilename);
$location = "upload/" . $newfilename;


$sql = "INSERT INTO camas (imagen,nombre,descripcion,precio_compra,categoria,imagen1,imagen2,imagen3) values ('$imagen4','$nombre4','$descripcion4','$precio_compra4','$categoria4','$imagen14','$imagen24','$imagen34')";
if(mysqli_query($conn,$sql)){
    echo "Producto Guardado";
}else{
    echo "Error".$sql;
}
?>