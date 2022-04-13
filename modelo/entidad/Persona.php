<?php

class Persona{

    public $idpersona;
    public $nombre;
    public $apellido;
    public $correo;
    public $password;
    public $imagen;
    public $fecharegistro;

    public function __construct($idpersona, $nombre, $apellido, $correo, $password, $imagen,$fecharegistro)
    {
        $this->idpersona=$idpersona;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->correo=$correo;
        $this->password=$password;
        $this->imagen=$imagen;
        $this->fecharegistro=$fecharegistro;
    }
    


    /**
     * Get the value of idpersona
     */ 
    public function getIdpersona()
    {
        return $this->idpersona;
    }

    /**
     * Set the value of idpersona
     *
     * @return  self
     */ 
    public function setIdpersona($idpersona)
    {
        $this->idpersona = $idpersona;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of correo
     */ 
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set the value of correo
     *
     * @return  self
     */ 
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get the value of fecharegistro
     */ 
    public function getFecharegistro()
    {
        return $this->fecharegistro;
    }

    /**
     * Set the value of fecharegistro
     *
     * @return  self
     */ 
    public function setFecharegistro($fecharegistro)
    {
        $this->fecharegistro = $fecharegistro;

        return $this;
    }
}