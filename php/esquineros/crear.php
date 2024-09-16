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

$sql = "INSERT INTO esquineros (imagen,nombre,descripcion,precio_compra,categoria,imagen1,imagen2,imagen3) values ('$imagen3','$nombre3','$descripcion3','$precio_compra3','$categoria3','$imagen13','$imagen23','$imagen33')";
if(mysqli_query($conn,$sql)){
    echo "Producto Guardado";
}else{
    echo "Error".$sql;
}
?>