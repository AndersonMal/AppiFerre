<?php
    
require_once(__DIR__."/../mdb/mdbPersona.php");
require_once(__DIR__."/../../modelo/entidad/Persona.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $passwordhash = password_hash($password,PASSWORD_DEFAULT);

    $persona=new Persona(NULL, $nombre, $apellido, $correo, $passwordhash, NULL,NULL);

    $user=registrarPersona($persona);

    echo($user);
    
