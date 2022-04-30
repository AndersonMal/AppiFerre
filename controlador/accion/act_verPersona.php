<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbPersona.php');
    $Personas = verPersona($id);
   
   echo json_encode($Personas);  
