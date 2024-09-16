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
// if(!$conn){
//     die("Error al conectar".mysqli_connect_error());
// }else {
//     echo "Conexión";
// }
$fileinfo = pathinfo($_FILES["image"]["name"]);
$newfilename = $fileinfo['filename'] . "_" . time() . "." . $fileinfo['extension'];
move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newfilename);
$location = "upload/" . $newfilename;


$sql = "INSERT INTO espaldares (imagen,nombre,descripcion,precio_compra,categoria,imagen1,imagen2,imagen3) values ('$imagen7','$nombre7','$descripcion7','$precio_compra7','$categoria7','$imagen17','$imagen27','$imagen37')";
if(mysqli_query($conn,$sql)){
    echo "Producto Guardado";
}else{
    echo "Error".$sql;
}
?>