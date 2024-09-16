<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreUsuario = $_POST['userr'];
    $contrasena = $_POST['psss'];

    // Conectar a la base de datos
    $host = "localhost";
    $user = "id22158185_mostrariomuebles";
    $pass = "Kenzo-1059";
    $db = "id22158185_mostrariomuebles";

    $conn=mysqli_connect($host,$user,$pass,$db);
    // Consultar la base de datos
    $query = "SELECT * FROM usuarios WHERE usuario = '$nombreUsuario'";
    $result = mysqli_query($conn, $query);

    // Verificar las credenciales
    if ($row = mysqli_fetch_assoc($result)) {
        if ($row['pass'] == $contrasena) {
            // Las credenciales son correctas, establecer la variable de sesión
            $_SESSION['loggedin'] = true;
            $_SESSION['usuario'] = $nombreUsuario;

            // Redireccionar a la página protegida
            header('Location: formulario.php');
            exit;
        }
    }

    // Credenciales incorrectas, mostrar mensaje de error
    $error = 'Credenciales incorrectas';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <title>Login</title>
    <link rel="icon" href="./assets/iconnegro.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/login.css">
    <script src="./js/custom.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    
    <section class="">
        <div class="form-box">
            <div class="form-value">
                <form action="" id="loginpanel" style="" method="POST">
                <h2>Login</h2>
                <div class="inputbox">
                    <input class="input" type="text" name="userr" id="userr" required="">
                    <label for="">Usuario</label>
                </div>
                <div class="inputbox">
                    <input class="input" type="password" name="psss" id="psss" required="">
                    <label for="">Contraseña</label>
                </div>
                    <div class="botonn">
                        <input class="btn-login" type="submit" value="LogIn">
                    </div>
                </form>
            </div>
        </div>
    </section>

<div id="ultimo"></div>

</body>
</html>
