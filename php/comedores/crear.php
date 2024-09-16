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
// if(!$conn){
//     die("Error al conectar".mysqli_connect_error());
// }else {
//     echo "Conexión";
// }
$fileinfo = pathinfo($_FILES["image"]["name"]);
$newfilename = $fileinfo['filename'] . "_" . time() . "." . $fileinfo['extension'];
move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newfilename);
$location = "upload/" . $newfilename;


$sql = "INSERT INTO comedores (imagen,nombre,descripcion,precio_compra,categoria,imagen1,imagen2,imagen3) values ('$imagen6','$nombre6','$descripcion6','$precio_compra6','$categoria6','$imagen16','$imagen26','$imagen36')";
if(mysqli_query($conn,$sql)){
    echo "Producto Guardado";
}else{
    echo "Error".$sql;
}
?>