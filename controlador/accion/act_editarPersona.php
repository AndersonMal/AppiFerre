<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbPersona.php');
    $idpersona = $_POST['idpersonas'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    
    $persona = new new Persona(NULL, $nombre, $apellido, $correo, $passwordhash, NULL,NULL);
    editarPersona($persona);

    header("Location: ../../vista/admin.html");
