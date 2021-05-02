<?php session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower(htmlspecialchars($_POST['usuario'])), FILTER_SANITIZE_STRING);
    $correo = filter_var(strtolower($_POST['correo']), FILTER_VALIDATE_EMAIL);
    $contraseña = $_POST['contraseña'];
    $contraseña2 = $_POST['contraseña2'];

    $errores = '';
    $errores2 = '';
    $errores3 = '';
    $errores4 = '';

    if (empty($usuario) or empty($correo) or empty($contraseña) or empty($contraseña2)) {
        $errores .= '<li>Por favor ingrese todos los datos correctamente</li>';
    } else {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=unishop', 'root', '');
        } catch (PDOException $e) {
            echo "Error " . $e->getMessage();
        }

        $declaracion = $conexion->prepare('SELECT * FROM registro WHERE usuario = :usuario LIMIT 1');
        $declaracion->execute(array(':usuario' => $usuario));
        $resultado = $declaracion->fetch();

        if ($resultado != false) {
            $errores2 .= '<li>El nombre de usuario ya existe</li>';
        }

        $verificarCorreo = $conexion->prepare('SELECT * FROM registro WHERE correo = :correo LIMIT 1');
        $verificarCorreo->execute(array(':correo' => $correo));
        $resultadoVerificar = $verificarCorreo->fetch();

        if ($resultadoVerificar != false) {
            $errores3 .= '<li> El correo ya existe</li>';
        }

        $contraseña = hash('gost', $contraseña);
        $contraseña2 = hash('gost', $contraseña2);

        if ($contraseña != $contraseña2) {
            $errores4 .= '<li> Las contraseñas no son iguales</li>';
        }
    }

    if ($errores == '' && $errores2 == '' && $errores3 == '' && $errores4 == '') {
        $statement = $conexion->prepare('INSERT INTO registro (id, usuario, correo, pass) VALUES (null, :usuario, :correo, :pass)');
        $statement->execute(array(':usuario' => $usuario, ':correo' => $correo, ':pass' => $contraseña));

        header('Location: iniciar.php');
    }


}


require 'views/registro.view.php';

?>