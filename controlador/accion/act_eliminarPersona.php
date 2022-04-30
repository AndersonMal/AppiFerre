<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbPersona.php');
    $idpersonas = $_GET['idpersonas'];
    
    eliminarPersona($idpersona);

    header("Location: ../../vista/admin.html");