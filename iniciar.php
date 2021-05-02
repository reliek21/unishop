<?php session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower(htmlspecialchars($_POST['usuario'])), FILTER_SANITIZE_STRING);
    $contraseña = $_POST['contraseña'];
    $contraseña = hash('gost', $contraseña);

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=unishop', 'root', '');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $declaracion = $conexion->prepare('SELECT * FROM registro WHERE usuario = :usuario AND pass = :password');
    $declaracion->execute(array(':usuario' => $usuario, ':password' => $contraseña));
    $resultado = $declaracion->fetch();

    if ($resultado !== false) {
        $_SESSION['usuario'] = $usuario;
        header('Location: index-usuario.php');
    } else {
        $errores .= '<li>La contraseña o el usuario son incorrectos</li>';
    }
}

require 'views/iniciar.view.php';

?>