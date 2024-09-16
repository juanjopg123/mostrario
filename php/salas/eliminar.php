<?php
$ideliminar = $_POST['ideliminar'];

$host = "localhost";
$user = "id22158185_mostrariomuebles";
$pass = "Kenzo-1059";
$db = "id22158185_mostrariomuebles";


$conn = mysqli_connect($host,$user,$pass,$db);

mysqli_query($conn,"DELETE FROM salas where id='".$ideliminar."'");
if ('mysqli_query'){
    echo"Registro Eliminado";
}else {
    echo "error".mysqli_error($conn);
}
?>