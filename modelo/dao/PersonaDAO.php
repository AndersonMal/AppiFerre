<?php
require_once("DataSource.php");
require_once(__DIR__."/../entidad/Persona.php");

class PersonaDAO {

    public function registrarPersona(Persona $persona){

        $data_source = new DataSource();

        $data_table=$data_source->ejecutarConsulta("SELECT * FROM personas WHERE correo=:correo", array( ':correo'=>$persona->getCorreo() ) );

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

    public function autenticarPersona($correo, $password){
        
        $data_source = new DataSource();

        $data_table= $data_source->ejecutarConsulta("SELECT * FROM personas WHERE correo =:correo",array(':correo'=>$correo));

        $persona=null;

        if(count($data_table)==1 && password_verify($password,$data_table[0]["password"])){
            
            foreach($data_table as $indice => $valor){

                $persona = new Persona(
                        
                        $data_table[$indice]["idpersonas"],
                        $data_table[$indice]["nombre"],
                        $data_table[$indice]["apellido"],
                        $data_table[$indice]["correo"],
                        $data_table[$indice]["password"],
                        $data_table[$indice]["imagen"],
                        $data_table[$indice]["fecharegistro"]
                        
                        );
            }
        }
        return $persona;
    }

    public function verpersona(){

        $data_source = new DataSource();

        $data_table= $data_source->ejecutarConsulta("SELECT * FROM personas", NULL);
        $persona=null
        $personas=array();

        foreach($data_table as $indice => $valor){
            $persona = new Persona(
                $data_table[$indice]["idpersonas"],
                $data_table[$indice]["nombre"],
                $data_table[$indice]["apellido"],
                $data_table[$indice]["correo"],
                $data_table[$indice]["password"],
                $data_table[$indice]["imagen"],
                $data_table[$indice]["fecharegistro"]
                    );
            array_push($personas,$persona);
        }
        
    return $personas;
    }
    public function verPersonaPorId($id){




    }







    
}