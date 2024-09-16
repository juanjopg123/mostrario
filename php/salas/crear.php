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
// if(!$conn){
//     die("Error al conectar".mysqli_connect_error());
// }else {
//     echo "Conexión";
// }
$fileinfo = pathinfo($_FILES["image"]["name"]);
$newfilename = $fileinfo['filename'] . "_" . time() . "." . $fileinfo['extension'];
move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newfilename);
$location = "upload/" . $newfilename;


$sql = "INSERT INTO salas (imagen,nombre,descripcion,precio_compra,categoria,imagen1,imagen2,imagen3) values ('$imagen2','$nombre2','$descripcion2','$precio_compra2','$categoria2','$imagen12','$imagen22','$imagen32')";
if(mysqli_query($conn,$sql)){
    echo "Producto Guardado";
}else{
    echo "Error".$sql;
}
?>