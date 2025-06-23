<?php
    session_start();
    include('Datos.php');

    if(isset($_POST['usuario']) && isset($_POST['contrasenia'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $Usuario = validate($_POST['usuario']);
        $Clave = validate($_POST['contrasenia']);

        if(empty($Usuario)){
            header("Location: login.php?error=El usuario es requerido");
            exit();
        }elseif(empty($Clave)){
            header("Location: login.php?error=La contraseña es requerida");
            exit();
        }else{

            //$Clave = md5($Clave);

            $sql = "SELECT * FROM datos WHERE usuario = '$Usuario' AND clave = '$Clave'";
            $result = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if ($row['usuario'] === $Usuario && $row['clave'] === $Clave){
                    $_SESSION['usuario'] = $row['usuario'];
                    $_SESSION['clave'] = $row['clave'];
                    header("Location: ./index.html");
                    exit();
                }else{
                    header("Location: login.php?error=El usuario o contraseña son incorrectos");
                    exit();
                }


            }else{
                header("Location: login.php?error=El usuario o contraseña son incorrectos");
                exit();

            }

    }
}else{
    header("Location: login.php");
    exit();
}

?>