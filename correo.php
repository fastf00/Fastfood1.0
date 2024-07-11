<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "fastfood"; 

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="module" src="js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="css/comentario.css">
	<link rel="stylesheet" href="css/bootstrap-4.4.1.css">
    <title>Usuarios</title>
</head>
<body>
    <div class="wrapper">
    <form  action="#" name="fastfood" method="post" class="form">
            <h1>Cliente</h1>

            <div class="input-box">
                <input type="text" placeholder="Nombre(s)" name="nombre" required class="form-control">
            </div>

            <div class="input-box">
                <input type="text" placeholder="Comentario" name="comentario" required class="form-control">
            </div>
            
            <div class="row mt-3 mb-3 text-center">
                <div class="g-2 col-12 col-md-6  d-grid gap-2 d-md-block">
                    <input type="submit" name="registro" class="btn">           
                </div>
                <div class="g-2 col-12 col-md-6  d-grid gap-2 d-md-block">
                    <button type="reset" class="btn"> <i class="bi bi-save2"></i> Borrar</button>
                </div>
                <div class="g-2 col-12 col-md-6  d-grid gap-2 d-md-block">
                    <a href="index-venta.html" class="btn" onclick="redirigir()">Regresar</a> 
                </div>
            </div>

        </form>
    </div>
</body>
    <?php
    if(isset($_POST['registro'])){

        $nombre= $_POST['nombre'];
        $comentario= $_POST['comentario'];

        $insertarDatos = "INSERT INTO comentario VALUES('$nombre', '$comentario')";
        if(mysqli_query($enlace,$insertarDatos)){
            echo '<script>alert("Comentario agregado"); window.location="correo.php";</script>:';
        }else{
            echo '<script>alert("Hubo un error"); window.location="index.php";</script>:';
        }
        }
        ?>
    
    
</html>