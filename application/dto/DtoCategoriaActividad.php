<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DtoCategoriaActividad{
    private $idCategoriaActividad;
    private $Descripcion;
    private $idEstado;
    private $FechaRegistro;

    /**
     * Get the value of idCategoriaActividad
     */ 
    public function getIdCategoriaActividad()
    {
        return $this->idCategoriaActividad;
    }

    /**
     * Set the value of idCategoriaActividad
     *
     * @return  self
     */ 
    public function setIdCategoriaActividad($idCategoriaActividad)
    {
        $this->idCategoriaActividad = $idCategoriaActividad;

        return $this;
    }

    /**
     * Get the value of Descripcion
     */ 
    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    /**
     * Set the value of Descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($Descripcion)
    {
        $this->Descripcion = $Descripcion;

        return $this;
    }

    /**
     * Get the value of idEstado
     */ 
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Set the value of idEstado
     *
     * @return  self
     */ 
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;

        return $this;
    }

    /**
     * Get the value of FechaRegistro
     */ 
    public function getFechaRegistro()
    {
        return $this->FechaRegistro;
    }

    /**
     * Set the value of FechaRegistro
     *
     * @return  self
     */ 
    public function setFechaRegistro($FechaRegistro)
    {
        $this->FechaRegistro = $FechaRegistro;

        return $this;
    }
}
