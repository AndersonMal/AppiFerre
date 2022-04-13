<?php
    
require_once(__DIR__."/../mdb/mdbPersona.php");
require_once(__DIR__."/../../modelo/entidad/Persona.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    // $fecharegistro=

    $persona=new Persona(NULL, $nombre, $apellido, $correo, $password, NULL,NULL);

    $user=registrarPersona($persona);
    echo($user);
    
