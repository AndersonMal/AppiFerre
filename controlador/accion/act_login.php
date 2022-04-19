<?php


require_once(__DIR__."/../mdb/mdbPersona.php");

$correo = $_POST['correo'];
$password = $_POST['password'];

$user = autenticarPersona($correo, $password);

if ($user != null) {
    session_start();
    $_SESSION['ID_USUARIO'] = $user->getIdpersona();
    $_SESSION['NOMBRE_USUARIO'] = $user->getNombre().' '.$user->getApellido();
    $_SESSION['IMAGEN'] = $user->getImagen();
    echo 1;

} else {
    echo -1;
}
