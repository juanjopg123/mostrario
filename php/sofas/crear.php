<?php
$id = $_POST['id'];
$imagen = $_POST['imagen'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio_compra = $_POST['precio_compra']; // Valor con puntos
$categoria = $_POST['categoria'];
$imagen1 = $_POST['imagen1'];
$imagen2 = $_POST['imagen2'];
$imagen3 = $_POST['imagen3'];

// $host = "localhost";
// $user = "id20937449_mostrariomuebles";
// $pass = "Kenzo-1059";
// $db = "id20937449_mostrario";

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



$sql = "INSERT INTO sofa (imagen, nombre, descripcion, precio_compra, categoria, imagen1, imagen2, imagen3) VALUES ('$imagen', '$nombre', '$descripcion', '$precio_compra', '$categoria', '$imagen1', '$imagen2', '$imagen3')";
if(mysqli_query($conn,$sql)){
    echo "Producto Guardado";
}else{
    echo "Error".$sql;
}
?>