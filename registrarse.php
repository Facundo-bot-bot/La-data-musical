<?php
    session_start();

    include_once('Datos.php');

    if(isset($_POST['nombre']) && isset($_POST['usuario']) && isset($_POST['contrasenia']) && isset($_POST['contrasenia2'])) {
        function validar($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        $nombre = validar($_POST['nombre']);
        $usuario =  validar($_POST['usuario']);
        $pass =  validar($_POST['contrasenia']);
        $pass2 =  validar($_POST['contrasenia2']);

        $datosUsuario = 'usuario= ' . $usuario . '&nombre= ' . $nombre;

        if(empty($usuario)){
            header("Location: register.php?error=El usuario es requerido&$datosUsuario");
            exit();
        }elseif(empty($nombre)){
            header("Location: register.php?error=El ingreso de su nombre es requerido&$datosUsuario");
            exit();
        }elseif(empty($pass)){
            header("Location: register.php?error=La contraseña es requerida&$datosUsuario");
            exit();
        }elseif(empty($pass2)){
            header("Location: register.php?error=Ingrese la contraseña nuevaente para verificar&$datosUsuario");
            exit();
        }elseif($pass !== $pass2){
            header("Location: register.php?error=La contraseñas no coinciden&$datosUsuario");
            exit();
        }else{
            //$pass = md5($pass);

            $sql = "SELECT * FROM datos where usuario = '$usuario'";
            $query = $conexion->query($sql);

            if(mysqli_num_rows($query) > 0){
                header("Location: register.php?error=El usuario ya existe!");
                exit();
            }else {
                $sql2 = "INSERT INTO datos(nombre, usuario, clave) VALUES('$nombre','$usuario','$pass')";
                $query2 = $conexion->query($sql2);
                
                if($query2){
                    header("Location: register.php?success=Usuario creado con exito!");
                    exit();
                }else{
                    header("Location: register.php?success=Ocurrió un error!");
                    exit();
                }
            }
        }
    }else {
        header('Location: register.php');
        exit();
    }
?>