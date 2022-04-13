<?php
require_once("DataSource.php");
require_once(__DIR__."/../entidad/Persona.php");

class PersonaDAO {

    public function registrarPersona(Persona $persona){

        $data_source = new DataSource();

        $data_table=$data_source->ejecutarConsulta("SELECT * FROM personas WHERE correo=:correo", array(':correo'=>$persona->getCorreo()) );

        if(count($data_table)!=0){

            return -1;

        }

        $data_source = new DataSource();

        $actualizacion = "INSERT INTO personas VALUES(NULL,:nombre,:apellido,:correo,:password,:imagen,CURRENT_DATE)";

        $resultado = $data_source->ejecutarActualizacion($actualizacion,array(
            ':nombre' => $persona->getNombre(),
            ':apellido' => $persona->getApellido(),
            ':correo' => $persona->getCorreo(),
            ':password' => $persona->getPassword(),
            ':imagen'=> $persona->getImagen()
            )
        );

        return $resultado;


    }







    
}