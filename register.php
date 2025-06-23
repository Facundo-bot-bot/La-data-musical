<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta name="viewport" content="widht=device-width, user,scalable=no, initial-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registrarse</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <nav> 
        <ul id="nav" >
            <li id="nave"><a href="ayuda.html">Ayuda</a></li>           
        </ul>
    </nav>
    <div class="fondo">
        <form action="registrarse.php" method="POST">
            <div class="card-container glass">
                    <h1> REGISTRARSE </h1>
                    <?php
                        if(isset($_GET['error'])){
                            ?>
                                <h2>
                                    <p class="error glass2"><?php echo $_GET['error'] ?></p>
                                </h2>
                            <?php
                        }?>
                        <?php
                        if(isset($_GET['success'])){
                            ?>
                                <h2>
                                    <p class="success glass2"><?php echo $_GET['success'] ?></p>
                                </h2>
                            <?php
                        }?>
                    <h2> <label> Nombre: </label>
                    <input type="text" placeholder="Ingrese un nombre" name="nombre"> </h2>
                    <h2> <label> Usuario/mail: </label>
                    <input type="text" placeholder="Ingrese un usuario" name="usuario"></h2>
                    <h2> <label> Contraseña: </label>
                    <input type="password" placeholder="Ingrese una clave" name="contrasenia"></h2>
                    <h2> <label> Ingrese la contraseña nuevamente: </label>
                    <input type="password" placeholder="Repita la clave" name="contrasenia2"></h2>
                    <br><br>
                    <a href="./login.php"> <button type="button" name="login"><h3> Iniciar sesión </h3></button> </a>
                    <button type="submit" class="button" value="register"><h3> Registrarse </h3> </button>
                <br><br>
            </div>
        </form>
    </div>
</body>

</html>