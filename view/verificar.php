<?php
    $host = "localhost";
    $port = "5432";
    $dbname = "inventario1";
    $user = "postgres";
    $password = "123";

    $con = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
    if (!$con) {
        die("Error al conectarse a la base de datos");
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM usuario WHERE nombre = '$username' AND contrasena = '$password'";
        $result = pg_query($con, $query);
        $count = pg_num_rows($result);

        if ($count > 0) {
            // Credenciales válidas, redirigir al escritorio del usuario
            header("Location: escritorio.php");
            exit();
        } else {
            // Credenciales inválidas, mostrar un mensaje de error
            echo "<p>Nombre de usuario o contraseña inválidos</p>";
        }
    }
?>