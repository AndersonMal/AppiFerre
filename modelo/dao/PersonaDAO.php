<?php
require_once("DataSource.php");
require_once(__DIR__."/../entidad/Persona.php");

class PersonaDAO {

    public function registrarPersona(Persona $persona){

        $data_source = new DataSource();

        $actualizacion = "INSERT INTO personas VALUES(NULL,:nombre,:apellido,:correo,:password,:imagen,:fecharegistro)";

        $resultado = $data_source->ejecutarActualizacion($actualizacion,array(
            ':nombre' => $persona->getNombre(),
            ':apellido' => $persona->getApellido(),
            ':correo' => $persona->getCorreo(),
            ':password' => $persona->getPassword(),
            ':imagen'=> $persona->getImagen(),
            ':fecharegistro'=>$persona->getFecharegistro()
            )
        );

        return $resultado;


    }







    
}