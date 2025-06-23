<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <nav> 
        <ul id="nav" >
            <li id="nave"><h3><a href="ayuda.html">Ayuda</a></h3></li>           
        </ul>
    </nav>

    <div class="fondo">
        <form action="InicioSesion.php" method="POST">
            <div class="card-container glass">
                    <h1> INICIAR SESIÓN </h1>
                    <?php
                    if(isset($_GET['error'])){
                        ?>
                            <h4>
                                <div class="error glass2">
                                    <?php
                                        echo $_GET['error'];
                                    ?>
                                </div>
                            </h4>
                        
                        <?php
                    }
                    ?>
                    <h2> <label> Usuario/mail: </label>
                    <input type="text" name="usuario"></h2>
                    <h2> <label> Contraseña: </label> 
                    <input type="password" name="contrasenia"></h2>
                    <br>
                    <a href="./register.php"><button type="button" name="register"><h3> Registrarse </h3></button></a>
                    <button type="submit" name="submit"><h3> Iniciar </h3></button>
                    <br><br>
            </div>
        </form>
    </div>
</body>

</html>