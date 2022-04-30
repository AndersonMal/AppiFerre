<?php
require_once(__DIR__."/../../modelo/dao/PersonaDAO.php");

function registrarPersona(Persona $persona){
    
    $dao=new PersonaDAO();

    $persona = $dao->registrarPersona($persona);

    return $persona;
}

function autenticarPersona($correo, $password){
    
    $dao = new PersonaDAO();

    $persona = $dao->autenticarPersona($correo, $password);

    return $persona;
}


function verPersona(){
    $dao=new PersonaDAO();

    $personas = $dao->verPersona();

    return $personas;
} 

function eliminarPersona($idpersonas){
    $dao=new PersonaDAO();
    $dao->eliminarPersona($idpersonas);
}

function verPersonaPorId($idpersonas){
    $dao=new PersonaDAO();
    $persona = $dao->verPersonaPorId($idpersonas);
    return $persona;
}

function editarPersona($idpersonas){
    $dao=new PersonaDAO();
    $dao->editarPersona($idpersonas);
}
