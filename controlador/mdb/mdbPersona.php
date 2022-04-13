<?php
require_once(__DIR__."/../../modelo/dao/PersonaDAO.php");

function registrarPersona(Persona $persona){
    
    $dao=new PersonaDAO();

    $persona = $dao->registrarPersona($persona);

    return $persona;
}