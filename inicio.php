<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inicio</title>
<link rel="stylesheet" href="estilo-2.css">
<link rel="icon" href="logos/fast.png" type="image/png">
</head>
<header>
  <div id="encabezado">
    <div id="logo"><img src="logos/fast.png" alt="" width="310px" height="225px"></div>
    <div>
      <h2>FAST FOOD</h2>
      <h1>"Tu comida favorita, a solo un click de distancia"</h1>
    </div>
    <div class="contenedor"><img src="img/cocina.png.png" alt="" ></div>
  </div>
</header>
<body>
<div class="container">
  <div class="btn-menu">
    <label for="btn-menu">☰</label>
  </div>
  <div class="cuerpo"> <img src="./imagenes/Captura.png" alt=""> </div>
  <div class="capa"></div>
  <input type="checkbox" id="btn-menu">
  <div class="container-menu">
    <div class="cont-menu">
      <nav>
        <?php
        session_start();
        if ( isset( $_SESSION[ 'correo' ] ) ) {
            include( "conexion.php" );
            $co = $_SESSION[ 'correo' ];
            $sql = "Select nombre from usuarios where correo='$co'";
            $dat = mysqli_fetch_array( mysqli_query( $conex, $sql ) );
            echo '<p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"><path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/></svg>  ' . $dat[ 'nombre' ] . '</p>';
        } else {
            echo "<script>alert('Acceso denegado'); window.location='index.html';</script>";
        }
        ?>
        <a href="index-3.html">Lunes</a> <a href="martes.html">Martes</a> <a href="miercole.html">Miercoles</a> <a href="jueves.html">Jueves</a> <a href="viernes.html">Viernes</a> <a href="cerrars.php">Cerrar sesion</a></nav>
      <label for="btn-menu">✖️</label>
    </div>
  </div>
</div>
</body>
</html>