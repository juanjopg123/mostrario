<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('Location: login-panel.php');
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
    integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
    integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
    crossorigin="anonymous"></script>
  <title>Document</title>
  <link rel="icon" href="./assets/iconnegro.png" type="image/x-icon">
  <link rel="stylesheet" href="./css/formulario.css">
  <script src="./js/custom.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
</head>

<body>

  <section class="btn-cerrar">
    <div class="boton-cerrar">
      <div class="row">
        <div>
          <form action="logout.php" method="post" class="form-cerrar">
            <input type="submit" value="Cerrar sesión">
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- --------------------------------------------------- -->

  <section class="form-productos">
    <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
      <div class="row justify-content-center">
        <h2 style="padding:20px 0px 30px 0px;" class="titulos">Lista sofa</h2>
        <form method="post" action="./php/sofas/crear.php" class="formulario">

          <label for="id" class="col-sm-2 col-form-label">Id</label>
          <input type="int" name="id" placeholder="id del producto"><br><br>

          <label for="imagen" class="col-sm-2 col-form-label">Imagen</label>
          <input type="file" name="imagen" id="imagen"><br><br>

          <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
          <input type="text" name="nombre" placeholder="nombre del producto"><br><br>

          <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
          <input type="text" name="descripcion" placeholder="descripcion del producto"><br><br>

          <label for="precio_compra" class="col-sm-2 col-form-label">Precio compra</label>
          <input type="text" id="numeroInput" oninput="formatearNumero(this)" name="precio_compra"
            placeholder="precio de compra del producto"><br><br>

          <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
          <input type="text" name="categoria" placeholder="categoria del producto"><br><br>


          <section class="imagenes-productos">
            <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
              <div class="row justify-content-center">
                <h2 style="padding:20px 0px 30px 0px;" class="titulos">Imagenes pequeñas sofa</h2>

                <label for="imagen1" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen1" id="imagen1"><br><br>

                <label for="imagen2" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen2" id="imagen2"><br><br>

                <label for="imagen3" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen3" id="imagen3"><br><br>

              </div>
            </div>
          </section>
          <input type="submit" name="enviar" value="enviar" class="Boton"><br><br>

        </form>
      </div>
    </div>
  </section>

  <h2 style="padding:30px 0px 20px 0px;" class="titulos">Eliminar sofa</h2>

  <div class="container-fluid bg-light mx-auto" style="max-width: 1170px; padding: 30px 0px">
    <div class="row justify-content-center" style="background-color: #fff; text-align: center;" id="formulario">

      <form method="post" action="./php/sofas/eliminar.php" class="formulario"
        style="padding:30px 0px 30px 0px; text-align: center;">

        <label for="ideliminar" class="col-sm-2 col-form-label">Id</label>
        <input type="number" name="ideliminar" id="idinput" placeholder="categoria del producto"><br><br>

        <input type="submit" id="eliminar" name="eliminar" value="eliminar" class="Boton"><br><br>
      </form>
    </div>
  </div>

  <h2 style="padding:20px 0px 20px 0px;" class="titulos">Actualizar sofa</h2>

  <div class="container-fluid bg-light mx-auto" style="max-width: 1170px; padding: 30px 0px">
    <div class="row justify-content-center" style="background-color: #fff; text-align: center;" id="formulario">
      <form method="post" action="./php/sofas/actualizar.php" class="formulario"
        style="padding:0px 0px 30px 0px; text-align: center;">
        <label for="id" class="col-sm-2 col-form-label">Id</label>
        <input type="int" name="id" id="idddinput" placeholder="id del producto"><br><br>

        <label for="imagen" class="col-sm-2 col-form-label">Imagen</label>
        <input type="file" name="imagen" id="imageninput"><br><br>

        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <input type="text" name="nombre" id="nombreinput" placeholder="nombre del producto"><br><br>

        <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
        <input type="text" name="descripcion" id="descripcioninput" placeholder="descripcion del producto"><br><br>

        <label for="precio_compra" class="col-sm-2 col-form-label">Precio compra</label>
        <input type="text" id="numeroInput" oninput="formatearNumero(this)" name="precio_compra"
          placeholder="precio de compra del producto"><br><br>

        <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
        <input type="text" name="categoria" id="categoriainput" placeholder="categoria del producto"><br><br>

        <section class="imagenes-productos">
          <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
            <div class="row justify-content-center">
              <h2 style="padding:20px 0px 30px 0px;" class="titulos">Imagenes pequeñas sofa</h2>

              <label for="imagen1" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen1" id="imagen1"><br><br>

              <label for="imagen2" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen2" id="imagen2"><br><br>

              <label for="imagen3" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen3" id="imagen3"><br><br>

            </div>
          </div>
        </section>

        <input type="submit" name="actualizar" value="Actualizar" class="Boton"><br><br>
      </form>
    </div>
  </div>

  <!-- --------------------------------------------------- -->

  <section class="form-productos">
    <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
      <div class="row justify-content-center">
        <h2 style="padding:20px 0px 30px 0px;" class="titulos">Lista Salas</h2>
        <form method="post" action="./php/salas/crear.php" class="formulario">

          <label for="id2" class="col-sm-2 col-form-label">Id</label>
          <input type="int" name="id2" placeholder="id del producto"><br><br>

          <label for="imagen2" class="col-sm-2 col-form-label">Imagen</label>
          <input type="file" name="imagen2" id="imagen"><br><br>

          <label for="nombre2" class="col-sm-2 col-form-label">Nombre</label>
          <input type="text" name="nombre2" placeholder="nombre del producto"><br><br>

          <label for="descripcion2" class="col-sm-2 col-form-label">Descripcion</label>
          <input type="text" name="descripcion2" placeholder="descripcion del producto"><br><br>

          <label for="precio_compra2" class="col-sm-2 col-form-label">Precio compra</label>
          <input type="text" id="numeroInput" oninput="formatearNumero(this)" name="precio_compra2"
            placeholder="precio de compra del producto"><br><br>

          <label for="categoria2" class="col-sm-2 col-form-label">Categoria</label>
          <input type="text" name="categoria2" placeholder="categoria del producto"><br><br>

          <section class="imagenes-productos">
            <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
              <div class="row justify-content-center">
                <h2 style="padding:20px 0px 30px 0px;" class="titulos">Imagenes pequeñas Salas</h2>

                <label for="imagen1-2" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen1-2" id="imagen1"><br><br>

                <label for="imagen2-2" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen2-2" id="imagen2"><br><br>

                <label for="imagen3-2" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen3-2" id="imagen3"><br><br>

              </div>
            </div>
          </section>
          <input type="submit" name="enviar" value="enviar" class="Boton"><br><br>

        </form>
      </div>
    </div>
  </section>

  <h2 style="padding:30px 0px 20px 0px;" class="titulos">Eliminar Salas</h2>

  <div class="container-fluid bg-light mx-auto" style="max-width: 1170px; padding: 30px 0px">
    <div class="row justify-content-center" style="background-color: #fff; text-align: center;" id="formulario">

      <form method="post" action="./php/salas/eliminar.php" class="formulario"
        style="padding:0px 0px 30px 0px; text-align: center;">

        <label for="ideliminar" class="col-sm-2 col-form-label">Id</label>
        <input type="number" name="ideliminar" id="idinput" placeholder="categoria del producto"><br><br>

        <input type="submit" id="eliminar" name="eliminar" value="eliminar" class="Boton"><br><br>
      </form>
    </div>
  </div>

  <h2 style="padding:20px 0px 20px 0px;" class="titulos">Actualizar Salas</h2>

  <div class="container-fluid bg-light mx-auto" style="max-width: 1170px; padding: 30px 0px">
    <div class="row justify-content-center" style="background-color: #fff; text-align: center;" id="formulario">
      <form method="post" action="./php/salas/actualizar.php" class="formulario"
        style="padding:0px 0px 30px 0px; text-align: center;">
        <label for="id2" class="col-sm-2 col-form-label">Id</label>
        <input type="int" name="id2" id="idddinput" placeholder="id del producto"><br><br>

        <label for="imagen2" class="col-sm-2 col-form-label">Imagen</label>
        <input type="file" name="imagen2" id="imageninput"><br><br>

        <label for="nombre2" class="col-sm-2 col-form-label">Nombre</label>
        <input type="text" name="nombre2" id="nombreinput" placeholder="nombre del producto"><br><br>

        <label for="descripcion2" class="col-sm-2 col-form-label">Descripcion</label>
        <input type="text" name="descripcion2" id="descripcioninput" placeholder="descripcion del producto"><br><br>

        <label for="precio_compra2" class="col-sm-2 col-form-label">Precio compra</label>
        <input type="text" id="numeroInput" oninput="formatearNumero(this)" name="precio_compra2"
          id="precio_comprainput" placeholder="precio de compra del producto"><br><br>

        <label for="categoria2" class="col-sm-2 col-form-label">Categoria</label>
        <input type="text" name="categoria2" id="categoriainput" placeholder="categoria del producto"><br><br>

        <section class="imagenes-productos">
          <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
            <div class="row justify-content-center">
              <h2 style="padding:20px 0px 30px 0px;" class="titulos">Imagenes pequeñas Salas</h2>

              <label for="imagen1-2" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen1-2" id="imagen1"><br><br>

              <label for="imagen2-2" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen2-2" id="imagen2"><br><br>

              <label for="imagen3-2" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen3-2" id="imagen3"><br><br>

            </div>
          </div>
        </section>

        <input type="submit" name="actualizar" value="Actualizar" class="Boton"><br><br>
      </form>
    </div>
  </div>

  <!-- --------------------------------------------------- -->

  <section class="form-productos">
    <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
      <div class="row justify-content-center">
        <h2 style="padding:20px 0px 30px 0px;" class="titulos">Lista Esquineros</h2>
        <form method="post" action="./php/esquineros/crear.php" class="formulario"
          style="padding:30px 0px 0px 0px; background-color: #fff; text-align: center;">

          <label for="id3" class="col-sm-2 col-form-label">Id</label>
          <input type="int" name="id3" placeholder="id del producto"><br><br>

          <label for="imagen3" class="col-sm-2 col-form-label">Imagen</label>
          <input type="file" name="imagen3" id="imagen"><br><br>

          <label for="nombre3" class="col-sm-2 col-form-label">Nombre</label>
          <input type="text" name="nombre3" placeholder="nombre del producto"><br><br>

          <label for="descripcion3" class="col-sm-2 col-form-label">Descripcion</label>
          <input type="text" name="descripcion3" placeholder="descripcion del producto"><br><br>

          <label for="precio_compra3" class="col-sm-2 col-form-label">Precio compra</label>
          <input type="text" id="numeroInput" oninput="formatearNumero(this)" name="precio_compra3"
            placeholder="precio de compra del producto"><br><br>

          <label for="categoria3" class="col-sm-2 col-form-label">Categoria</label>
          <input type="text" name="categoria3" placeholder="categoria del producto"><br><br>


          <section class="imagenes-productos">
            <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
              <div class="row justify-content-center">
                <h2 style="padding:20px 0px 30px 0px;" class="titulos">Imagenes pequeñas Esquineros</h2>

                <label for="imagen1-3" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen1-3" id="imagen1"><br><br>

                <label for="imagen2-3" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen2-3" id="imagen2"><br><br>

                <label for="imagen3-3" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen3-3" id="imagen3"><br><br>

              </div>
            </div>
          </section>
          <input type="submit" name="enviar" value="enviar" class="Boton"><br><br>

        </form>
      </div>
    </div>
  </section>

  <h2 style="padding:30px 0px 20px 0px;" class="titulos">Eliminar Esquineros</h2>

  <div class="container-fluid bg-light mx-auto" style="max-width: 1170px; padding: 30px 0px">
    <div class="row justify-content-center" style="background-color: #fff; text-align: center;" id="formulario">

      <form method="post" action="./php/esquineros/eliminar.php" class="formulario"
        style="padding:0px 0px 30px 0px; text-align: center;">

        <label for="ideliminar" class="col-sm-2 col-form-label">Id</label>
        <input type="number" name="ideliminar" id="idinput" placeholder="categoria del producto"><br><br>

        <input type="submit" id="eliminar" name="eliminar" value="eliminar" class="Boton"><br><br>
      </form>
    </div>
  </div>

  <h2 style="padding:20px 0px 20px 0px;" class="titulos">Actualizar Esquineros</h2>
  <div class="container-fluid bg-light mx-auto" style="max-width: 1170px; padding: 30px 0px">
    <div class="row justify-content-center" style="background-color: #fff; text-align: center;" id="formulario">
      <form method="post" action="./php/esquineros/actualizar.php" class="formulario"
        style="padding:0px 0px 30px 0px; text-align: center;">
        <label for="id3" class="col-sm-2 col-form-label">Id</label>
        <input type="int" name="id3" id="idddinput" placeholder="id del producto"><br><br>

        <label for="imagen3" class="col-sm-2 col-form-label">Imagen</label>
        <input type="file" name="imagen3" id="imageninput"><br><br>

        <label for="nombre3" class="col-sm-2 col-form-label">Nombre</label>
        <input type="text" name="nombre3" id="nombreinput" placeholder="nombre del producto"><br><br>

        <label for="descripcion3" class="col-sm-2 col-form-label">Descripcion</label>
        <input type="text" name="descripcion3" id="descripcioninput" placeholder="descripcion del producto"><br><br>

        <label for="precio_compra3" class="col-sm-2 col-form-label">Precio compra</label>
        <input type="text" id="numeroInput" oninput="formatearNumero(this)" name="precio_compra3"
          id="precio_comprainput" placeholder="precio de compra del producto"><br><br>

        <label for="categoria3" class="col-sm-2 col-form-label">Categoria</label>
        <input type="text" name="categoria3" id="categoriainput" placeholder="categoria del producto"><br><br>

        <section class="imagenes-productos">
          <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
            <div class="row justify-content-center">
              <h2 style="padding:20px 0px 30px 0px;" class="titulos">Imagenes pequeñas Esquineros</h2>

              <label for="imagen1-3" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen1-3" id="imagen1"><br><br>

              <label for="imagen2-3" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen2-3" id="imagen2"><br><br>

              <label for="imagen3-3" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen3-3" id="imagen3"><br><br>

            </div>
          </div>
        </section>

        <input type="submit" name="actualizar" value="Actualizar" class="Boton"><br><br>
      </form>
    </div>
  </div>

  <!-- --------------------------------------------------- -->

  <section class="form-productos">
    <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
      <div class="row justify-content-center">
        <h2 style="padding:20px 0px 30px 0px;" class="titulos">Lista Camas</h2>
        <form method="post" action="./php/camas/crear.php" class="formulario"
          style="padding:30px 0px 0px 0px; background-color: #fff; text-align: center;">

          <label for="id4" class="col-sm-2 col-form-label">Id</label>
          <input type="int" name="id4" placeholder="id del producto"><br><br>

          <label for="imagen4" class="col-sm-2 col-form-label">Imagen</label>
          <input type="file" name="imagen4" id="imagen"><br><br>

          <label for="nombre4" class="col-sm-2 col-form-label">Nombre</label>
          <input type="text" name="nombre4" placeholder="nombre del producto"><br><br>

          <label for="descripcion4" class="col-sm-2 col-form-label">Descripcion</label>
          <input type="text" name="descripcion4" placeholder="descripcion del producto"><br><br>

          <label for="precio_compra4" class="col-sm-2 col-form-label">Precio compra</label>
          <input type="text" id="numeroInput" oninput="formatearNumero(this)" name="precio_compra4"
            placeholder="precio de compra del producto"><br><br>

          <label for="categoria4" class="col-sm-2 col-form-label">Categoria</label>
          <input type="text" name="categoria4" placeholder="categoria del producto"><br><br>


          <section class="imagenes-productos">
            <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
              <div class="row justify-content-center">
                <h2 style="padding:20px 0px 30px 0px;" class="titulos">Imagenes pequeñas Camas</h2>

                <label for="imagen1-4" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen1-4" id="imagen1"><br><br>

                <label for="imagen2-4" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen2-4" id="imagen2"><br><br>

                <label for="imagen3-4" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen3-4" id="imagen3"><br><br>

              </div>
            </div>
          </section>
          <input type="submit" name="enviar" value="enviar" class="Boton"><br><br>

        </form>
      </div>
    </div>
  </section>

  <h2 style="padding:30px 0px 20px 0px;" class="titulos">Eliminar Camas</h2>

  <div class="container-fluid bg-light mx-auto" style="max-width: 1170px; padding: 30px 0px">
    <div class="row justify-content-center" style="background-color: #fff; text-align: center;" id="formulario">

      <form method="post" action="./php/camas/eliminar.php" class="formulario"
        style="padding:0px 0px 30px 0px; text-align: center;">

        <label for="ideliminar" class="col-sm-2 col-form-label">Id</label>
        <input type="number" name="ideliminar" id="idinput" placeholder="categoria del producto"><br><br>

        <input type="submit" id="eliminar" name="eliminar" value="eliminar" class="Boton"><br><br>
      </form>
    </div>
  </div>


  <h2 style="padding:20px 0px 20px 0px;" class="titulos">Actualizar Camas</h2>

  <div class="container-fluid bg-light mx-auto" style="max-width: 1170px; padding: 30px 0px">
    <div class="row justify-content-center" style="background-color: #fff; text-align: center;" id="formulario">
      <form method="post" action="./php/camas/actualizar.php" class="formulario"
        style="padding:0px 0px 30px 0px; text-align: center;">
        <label for="id4" class="col-sm-2 col-form-label">Id</label>
        <input type="int" name="id4" id="idddinput" placeholder="id del producto"><br><br>

        <label for="imagen4" class="col-sm-2 col-form-label">Imagen</label>
        <input type="file" name="imagen4" id="imageninput"><br><br>

        <label for="nombre4" class="col-sm-2 col-form-label">Nombre</label>
        <input type="text" name="nombre4" id="nombreinput" placeholder="nombre del producto"><br><br>

        <label for="descripcion4" class="col-sm-2 col-form-label">Descripcion</label>
        <input type="text" name="descripcion4" id="descripcioninput" placeholder="descripcion del producto"><br><br>

        <label for="precio_compra4" class="col-sm-2 col-form-label">Precio compra</label>
        <input type="text" id="numeroInput" oninput="formatearNumero(this)" name="precio_compra4"
          placeholder="precio de compra del producto"><br><br>

        <label for="categoria4" class="col-sm-2 col-form-label">Categoria</label>
        <input type="text" name="categoria4" id="categoriainput" placeholder="categoria del producto"><br><br>

        <section class="imagenes-productos">
          <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
            <div class="row justify-content-center">
              <h2 style="padding:20px 0px 30px 0px;" class="titulos">Imagenes pequeñas Camas</h2>

              <label for="imagen1-4" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen1-4" id="imagen1"><br><br>

              <label for="imagen2-4" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen2-4" id="imagen2"><br><br>

              <label for="imagen3-4" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen3-4" id="imagen3"><br><br>

            </div>
          </div>
        </section>

        <input type="submit" name="actualizar" value="Actualizar" class="Boton"><br><br>
      </form>
    </div>
  </div>

  <!-- --------------------------------------------------- -->

  <section class="form-productos">
    <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
      <div class="row justify-content-center">
        <h2 style="padding:20px 0px 30px 0px;" class="titulos">Lista sillas</h2>
        <form method="post" action="./php/sillas/crear.php" class="formulario"
          style="padding:30px 0px 0px 0px; background-color: #fff; text-align: center;">

          <label for="id5" class="col-sm-2 col-form-label">Id</label>
          <input type="int" name="id5" placeholder="id del producto"><br><br>

          <label for="imagen5" class="col-sm-2 col-form-label">Imagen</label>
          <input type="file" name="imagen5" id="imagen"><br><br>

          <label for="nombre5" class="col-sm-2 col-form-label">Nombre</label>
          <input type="text" name="nombre5" placeholder="nombre del producto"><br><br>

          <label for="descripcion5" class="col-sm-2 col-form-label">Descripcion</label>
          <input type="text" name="descripcion5" placeholder="descripcion del producto"><br><br>

          <label for="precio_compra5" class="col-sm-2 col-form-label">Precio compra</label>
          <input type="text" id="numeroInput" oninput="formatearNumero(this)" name="precio_compra5"
            placeholder="precio de compra del producto"><br><br>

          <label for="categoria5" class="col-sm-2 col-form-label">Categoria</label>
          <input type="text" name="categoria5" placeholder="categoria del producto"><br><br>


          <section class="imagenes-productos">
            <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
              <div class="row justify-content-center">
                <h2 style="padding:20px 0px 30px 0px;" class="titulos">Imagenes pequeñas Sillas</h2>

                <label for="imagen1-5" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen1-5" id="imagen1"><br><br>

                <label for="imagen2-5" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen2-5" id="imagen2"><br><br>

                <label for="imagen3-5" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen3-5" id="imagen3"><br><br>

              </div>
            </div>
          </section>
          <input type="submit" name="enviar" value="enviar" class="Boton"><br><br>

        </form>
      </div>
    </div>
  </section>

  <h2 style="padding:30px 0px 20px 0px;" class="titulos">Eliminar sillas</h2>

  <div class="container-fluid bg-light mx-auto" style="max-width: 1170px; padding: 30px 0px">
    <div class="row justify-content-center" style="background-color: #fff; text-align: center;" id="formulario">

      <form method="post" action="./php/sillas/eliminar.php" class="formulario"
        style="padding:0px 0px 30px 0px; text-align: center;">

        <label for="ideliminar" class="col-sm-2 col-form-label">Id</label>
        <input type="number" name="ideliminar" id="idinput" placeholder="categoria del producto"><br><br>

        <input type="submit" id="eliminar" name="eliminar" value="eliminar" class="Boton"><br><br>
      </form>
    </div>
  </div>

  <h2 style="padding:20px 0px 20px 0px;" class="titulos">Actualizar Sillas</h2>

  <div class="container-fluid bg-light mx-auto" style="max-width: 1170px; padding: 30px 0px">
    <div class="row justify-content-center" style="background-color: #fff; text-align: center;" id="formulario">
      <form method="post" action="./php/sillas/actualizar.php" class="formulario"
        style="padding:0px 0px 30px 0px; text-align: center;">
        <label for="id5" class="col-sm-2 col-form-label">Id</label>
        <input type="int" name="id5" id="idddinput" placeholder="id del producto"><br><br>

        <label for="imagen5" class="col-sm-2 col-form-label">Imagen</label>
        <input type="file" name="imagen5" id="imageninput"><br><br>

        <label for="nombre5" class="col-sm-2 col-form-label">Nombre</label>
        <input type="text" name="nombre5" id="nombreinput" placeholder="nombre del producto"><br><br>

        <label for="descripcion5" class="col-sm-2 col-form-label">Descripcion</label>
        <input type="text" name="descripcion5" id="descripcioninput" placeholder="descripcion del producto"><br><br>

        <label for="precio_compra5" class="col-sm-2 col-form-label">Precio compra</label>
        <input type="text" id="numeroInput" oninput="formatearNumero(this)" name="precio_compra5"
          placeholder="precio de compra del producto"><br><br>

        <label for="categoria5" class="col-sm-2 col-form-label">Categoria</label>
        <input type="text" name="categoria5" id="categoriainput" placeholder="categoria del producto"><br><br>

        <section class="imagenes-productos">
          <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
            <div class="row justify-content-center">
              <h2 style="padding:20px 0px 30px 0px;" class="titulos">Imagenes pequeñas Sillas</h2>

              <label for="imagen1-5" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen1-5" id="imagen1"><br><br>

              <label for="imagen2-5" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen2-5" id="imagen2"><br><br>

              <label for="imagen3-5" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen3-5" id="imagen3"><br><br>
            </div>
          </div>
        </section>

        <input type="submit" name="actualizar" value="Actualizar" class="Boton"><br><br>
      </form>
    </div>
  </div>

  <!-- --------------------------------------------------- -->

  <section class="form-productos">
    <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
      <div class="row justify-content-center">
        <h2 style="padding:20px 0px 30px 0px;" class="titulos">Lista Comedores</h2>
        <form method="post" action="./php/comedores/crear.php" class="formulario"
          style="padding:30px 0px 0px 0px; background-color: #fff; text-align: center;">

          <label for="id6" class="col-sm-2 col-form-label">Id</label>
          <input type="int" name="id6" placeholder="id del producto"><br><br>

          <label for="imagen6" class="col-sm-2 col-form-label">Imagen</label>
          <input type="file" name="imagen6" id="imagen"><br><br>

          <label for="nombre6" class="col-sm-2 col-form-label">Nombre</label>
          <input type="text" name="nombre6" placeholder="nombre del producto"><br><br>

          <label for="descripcion6" class="col-sm-2 col-form-label">Descripcion</label>
          <input type="text" name="descripcion6" placeholder="descripcion del producto"><br><br>

          <label for="precio_compra6" class="col-sm-2 col-form-label">Precio compra</label>
          <input type="text" id="numeroInput" oninput="formatearNumero(this)" name="precio_compra6"
            placeholder="precio de compra del producto"><br><br>

          <label for="categoria6" class="col-sm-2 col-form-label">Categoria</label>
          <input type="text" name="categoria6" placeholder="categoria del producto"><br><br>


          <section class="imagenes-productos">
            <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
              <div class="row justify-content-center">
                <h2 style="padding:20px 0px 30px 0px;" class="titulos">Imagenes pequeñas Comedores</h2>

                <label for="imagen1-6" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen1-6" id="imagen1"><br><br>

                <label for="imagen2-6" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen2-6" id="imagen2"><br><br>

                <label for="imagen3-6" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen3-6" id="imagen3"><br><br>

              </div>
            </div>
          </section>
          <input type="submit" name="enviar" value="enviar" class="Boton"><br><br>

        </form>
      </div>
    </div>
  </section>

  <h2 style="padding:30px 0px 20px 0px;" class="titulos">Eliminar Comedores</h2>

  <div class="container-fluid bg-light mx-auto" style="max-width: 1170px; padding: 30px 0px">
    <div class="row justify-content-center" style="background-color: #fff; text-align: center;" id="formulario">

      <form method="post" action="./php/comedores/eliminar.php" class="formulario"
        style="padding:0px 0px 30px 0px; text-align: center;">

        <label for="ideliminar" class="col-sm-2 col-form-label">Id</label>
        <input type="number" name="ideliminar" id="idinput" placeholder="categoria del producto"><br><br>

        <input type="submit" id="eliminar" name="eliminar" value="eliminar" class="Boton"><br><br>
      </form>
    </div>
  </div>

  <h2 style="padding:20px 0px 20px 0px;" class="titulos">Actualizar Comedores</h2>

  <div class="container-fluid bg-light mx-auto" style="max-width: 1170px; padding: 30px 0px">
    <div class="row justify-content-center" style="background-color: #fff; text-align: center;" id="formulario">
      <form method="post" action="./php/comedores/actualizar.php" class="formulario"
        style="padding:0px 0px 30px 0px; text-align: center;">
        <label for="id6" class="col-sm-2 col-form-label">Id</label>
        <input type="int" name="id6" id="idddinput" placeholder="id del producto"><br><br>

        <label for="imagen6" class="col-sm-2 col-form-label">Imagen</label>
        <input type="file" name="imagen6" id="imageninput"><br><br>

        <label for="nombre6" class="col-sm-2 col-form-label">Nombre</label>
        <input type="text" name="nombre6" id="nombreinput" placeholder="nombre del producto"><br><br>

        <label for="descripcion6" class="col-sm-2 col-form-label">Descripcion</label>
        <input type="text" name="descripcion6" id="descripcioninput" placeholder="descripcion del producto"><br><br>

        <label for="precio_compra6" class="col-sm-2 col-form-label">Precio compra</label>
        <input type="text" id="numeroInput" oninput="formatearNumero(this)" name="precio_compra6"
        placeholder="precio de compra del producto"><br><br>

        <label for="categoria6" class="col-sm-2 col-form-label">Categoria</label>
        <input type="text" name="categoria6" placeholder="categoria del producto"><br><br>

        <section class="imagenes-productos">
          <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
            <div class="row justify-content-center">
              <h2 style="padding:20px 0px 30px 0px;" class="titulos">Imagenes pequeñas Comedores</h2>

              <label for="imagen1-6" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen1-6" id="imagen1"><br><br>

              <label for="imagen2-6" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen2-6" id="imagen2"><br><br>

              <label for="imagen3-6" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen3-6" id="imagen3"><br><br>

            </div>
          </div>
        </section>
        <input type="submit" name="actualizar" value="Actualizar" class="Boton"><br><br>
      </form>
    </div>
  </div>

  <!-- --------------------------------------------------- -->

  <section class="form-productos">
    <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
      <div class="row justify-content-center">
        <h2 style="padding:20px 0px 30px 0px;" class="titulos">Lista Espaldares</h2>
        <form method="post" action="./php/espaldares/crear.php" class="formulario"
          style="padding:30px 0px 0px 0px; background-color: #fff; text-align: center;">

          <label for="id7" class="col-sm-2 col-form-label">Id</label>
          <input type="int" name="id7" placeholder="id del producto"><br><br>

          <label for="imagen7" class="col-sm-2 col-form-label">Imagen</label>
          <input type="file" name="imagen7" id="imagen"><br><br>

          <label for="nombre7" class="col-sm-2 col-form-label">Nombre</label>
          <input type="text" name="nombre7" placeholder="nombre del producto"><br><br>

          <label for="descripcion7" class="col-sm-2 col-form-label">Descripcion</label>
          <input type="text" name="descripcion7" placeholder="descripcion del producto"><br><br>

          <label for="precio_compra7" class="col-sm-2 col-form-label">Precio compra</label>
          <input type="text" id="numeroInput" oninput="formatearNumero(this)" name="precio_compra7"
            placeholder="precio de compra del producto"><br><br>

          <label for="categoria7" class="col-sm-2 col-form-label">Categoria</label>
          <input type="text" name="categoria7" placeholder="categoria del producto"><br><br>


          <section class="imagenes-productos">
            <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
              <div class="row justify-content-center">
                <h2 style="padding:20px 0px 30px 0px;" class="titulos">Imagenes pequeñas Espaldares</h2>

                <label for="imagen1-7" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen1-7" id="imagen1"><br><br>

                <label for="imagen2-7" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen2-7" id="imagen2"><br><br>

                <label for="imagen3-7" class="col-sm-2 col-form-label">Imagen</label>
                <input type="file" name="imagen3-7" id="imagen3"><br><br>

              </div>
            </div>
          </section>
          <input type="submit" name="enviar" value="enviar" class="Boton"><br><br>
        </form>
      </div>
    </div>
  </section>

  <h2 style="padding:30px 0px 20px 0px;" class="titulos">Eliminar Espaldares</h2>

  <div class="container-fluid bg-light mx-auto" style="max-width: 1170px; padding: 30px 0px">
    <div class="row justify-content-center" style="background-color: #fff; text-align: center;" id="formulario">

      <form method="post" action="./php/espaldares/eliminar.php" class="formulario"
        style="padding:0px 0px 30px 0px; text-align: center;">

        <label for="ideliminar" class="col-sm-2 col-form-label">Id</label>
        <input type="number" name="ideliminar" id="idinput" placeholder="categoria del producto"><br><br>

        <input type="submit" id="eliminar" name="eliminar" value="eliminar" class="Boton"><br><br>
      </form>
    </div>
  </div>


  <h2 style="padding:20px 0px 20px 0px;" class="titulos">Actualizar Espaldares</h2>

  <div class="container-fluid bg-light mx-auto" style="max-width: 1170px; padding: 30px 0px">
    <div class="row justify-content-center" style="background-color: #fff; text-align: center;" id="formulario">
      <form method="post" action="./php/espaldares/actualizar.php" class="formulario"
        style="padding:0px 0px 30px 0px; text-align: center;">
        <label for="id7" class="col-sm-2 col-form-label">Id</label>
        <input type="int" name="id7" id="idddinput" placeholder="id del producto"><br><br>

        <label for="imagen7" class="col-sm-2 col-form-label">Imagen</label>
        <input type="file" name="imagen7" id="imageninput"><br><br>

        <label for="nombre7" class="col-sm-2 col-form-label">Nombre</label>
        <input type="text" name="nombre7" id="nombreinput" placeholder="nombre del producto"><br><br>

        <label for="descripcion7" class="col-sm-2 col-form-label">Descripcion</label>
        <input type="text" name="descripcion7" id="descripcioninput" placeholder="descripcion del producto"><br><br>

        <label for="precio_compra7" class="col-sm-2 col-form-label">Precio compra</label>
        <input type="number" name="precio_compra7" id="precio_comprainput"
          placeholder="precio de compra del producto"><br><br>

        <label for="categoria7" class="col-sm-2 col-form-label">Categoria</label>
        <input type="text" id="numeroInput" oninput="formatearNumero(this)" name="categoria7"
          placeholder="categoria del producto"><br><br>

        <section class="imagenes-productos">
          <div class="container-fluid bg-light mx-auto" style="max-width: 1200px;">
            <div class="row justify-content-center">
              <h2 style="padding:20px 0px 30px 0px;" class="titulos">Imagenes pequeñas Espaldares</h2>

              <label for="imagen1-7" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen1-7" id="imagen1"><br><br>

              <label for="imagen2-7" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen2-7" id="imagen2"><br><br>

              <label for="imagen3-7" class="col-sm-2 col-form-label">Imagen</label>
              <input type="file" name="imagen3-7" id="imagen3"><br><br>

            </div>
          </div>
        </section>
        <input type="submit" name="actualizar" value="Actualizar" class="Boton"><br><br>
      </form>
    </div>
  </div>

  <div id="ultimo"></div>

</body>

</html>