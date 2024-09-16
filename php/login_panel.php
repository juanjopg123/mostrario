<?php
$userr = $_POST["user"];
$psss = $_POST["pass"];
$host = "localhost";
$user = "id22158185_mostrariomuebles";
$pass = "Kenzo-1059";
$db = "id22158185_mostrariomuebles";
$conn = mysqli_connect($host, $user, $pass, $db);
$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario='" . $userr . "' and pass='" . $psss . "'");
$nr = mysqli_num_rows($query);
if ($nr == 1) {
    $response = array('status' => 'success', 'message' => 'Usuario válido');
} else {
    $response = array('status' => 'error', 'message' => 'Usuario incorrecto');
}

echo json_encode($response);
?>
