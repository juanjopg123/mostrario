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
// if(!$conn){
//     die("Error al conectar".mysqli_connect_error());
// }else {
//     echo "Conexión";
// }
$fileinfo = pathinfo($_FILES["image"]["name"]);
$newfilename = $fileinfo['filename'] . "_" . time() . "." . $fileinfo['extension'];
move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newfilename);
$location = "upload/" . $newfilename;


$sql = "INSERT INTO sillas (imagen,nombre,descripcion,precio_compra,categoria,imagen1,imagen2,imagen3) values ('$imagen5','$nombre5','$descripcion5','$precio_compra5','$categoria5','$imagen15','$imagen25','$imagen35')";
if(mysqli_query($conn,$sql)){
    echo "Producto Guardado";
}else{
    echo "Error".$sql;
}
?>