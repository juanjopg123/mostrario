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
    <title>Detalle espaldares</title>
    <link rel="icon" href="./assets/iconnegro.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/detalles.css">
	<script src="./js/custom.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

<button id="btn-ir-arriba"><img src="./assets/navegar-flecha-hacia-arriba.png" class="flecha-arriba" alt=""></button>

<nav class="nav-movil">
    <div class="logo-movil">
        <a href="./index.html"><img class="logo-mob" src="./assets/iconnegro.png" alt=""></a>
        <img class="logo-hambur" src="./assets/menu-hambur.png" alt="">
        <img class="logo-error" src="./assets/error.png" alt="">
    </div>
    <ul class="menu-movil">
        <li><a href="./index.html">Inicio</a></li>
        <li><a href="./sofa.php">Sofás</a></li>
        <li><a href="./salas.php">Salas</a></li>
        <li><a href="./esquineros.php">Esquineros</a></li>
        <li><a href="./camas.php">Camas</a></li>
        <li><a href="./espaldares.php">Espaldares</a></li>
        <li><a href="./sillas.php">Sillas</a></li>
        <li><a href="./comedores.php">Comedores</a></li>
    </ul>
</nav>

<header>
    <div class="header">
        <div class="header-container">
            <div class="img-icon">
                <a href="./index.html"><img src="./assets/iconnegro.png" alt=""></a>
            </div>
            <div class="header-contacto">
                <ul>
                    <li><img src="./assets/telefono.png" alt=""> Tel: 3052792408</li>
                    <li><img src="./assets/correo.png" alt=""> E-mail: mostrario1059@gmail.com</li>
                </ul>
            </div>
        </div>
    </div>
</header>

<div class="sub-header">
    <div class="sub-header-container">
        <div class="row">
            <div class="sub-header-content">
                <ul>
                    <li><a href="./index.html"><div><img src="./assets/casa-icono-silueta.png" alt=""></div> Inicio</a></li>
                    <li><a href="./sofa.php"><div><img src="./assets/logo.png" alt=""></div> Sofás</a></li>
                    <li><a href="./salas.php"><div><img src="./assets/sala.png" alt=""></div> Salas</a></li>
                    <li><a href="./esquineros.php"><div><img src="./assets/esquinero.png" alt=""></div> Esquineros</a></li>
                    <li><a href="./camas.php"><div><img src="./assets/cama.png" alt=""></div> Camas</a></li>
                    <li><a href="./espaldares.php"><div><img src="./assets/espaldar.png" alt=""></div> Espaldares</a></li>
                    <li><a href="./sillas.php"><div><img src="./assets/silla.png" alt=""></div> Sillas</a></li>
                    <li><a href="./comedores.php"><div><img src="./assets/mesa.png" alt=""></div> Comedores</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<?php
$idopt = $_GET['id'];
    // echo "es ".$idopt
?>  

<?php
$host = "localhost";
$user = "id22158185_mostrariomuebles";
$pass = "Kenzo-1059";
$db = "id22158185_mostrariomuebles";

$conn = mysqli_connect($host,$user,$pass,$db);

$query = mysqli_query($conn, "SELECT * FROM espaldares WHERE id='".$idopt."'");
?>

<?php
while ($row = mysqli_fetch_array($query)) {
?>

<section class="sesion2">
    <div class="sec">
        <div class="row">
            <div class="izquierda">
                <div class="imageness">
                    <div class="col-md-6">
                        <div class="img-container">
                            <img class="img" src="./upload/<?php echo $row['imagen'];?>" id="img"/>
                        </div>
                        <div class="small-images">
                            <img class="img2" src="./upload/<?php echo $row['imagen1'];?>" id="img2"/>
                            <img class="img2" src="./upload/<?php echo $row['imagen2'];?>" id="img2"/>
                            <img class="img2" src="./upload/<?php echo $row['imagen3'];?>" id="img2"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="derecha">
                <div class="col-md-6">
                    <div class="descripcion-content">
                        <p class="nombre"><?php echo $row['nombre']?></p>
                        <P class="text-der">$ <?php echo $row['precio_compra']?></P>
                        <p class="descripcion"><?php echo $row['descripcion']?></p>
                        <p class="text-der"><?php echo $row['categoria']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
}
?>

<footer style="background-color: #2b2b2b;">
    <div class="footer">
        <div class="row">
            <div class="footerx2">
                    <div class="col-md-4">
                        <div class="footer-izq">
                            <img src="./assets/telefono.png" alt="">
                            <p>Tel: 3052792408</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-medio">
                            <img src="./assets/direccion.png" alt="">
                            <p>Dirección: Calle 60 # 55 a 73, Itagui</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-der">
                            <img src="./assets/correo.png" alt="">
                            <p>E-mail: mostrario1059@gmail.com</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</footer>

<a href="https://api.whatsapp.com/send?phone=573052792408" target="_blank" id="boton-whatsapp">
    <img src="./assets/whatsapp.png" alt="" class="btn-whatsapp">
</a>

<a href="https://www.instagram.com/muebless_1059/" target="_blank" id="boton-instagram">
    <img src="./assets/instagram.png" alt="" class="btn-instagram">
</a>

<div id="ultimo"></div>

</body>
</html>