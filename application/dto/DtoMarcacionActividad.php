<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DtoMarcacionActividad{
    private $idMarcacionActividad;
    private $idCategoriaActividad;
    private $FechaMarcacion;
    private $Descripcion;
    private $HoraInicio;
    private $HoraTermino;
    private $idEstado;
    private $FechaRegistro;

    /**
     * Get the value of idMarcacionActividad
     */ 
    public function getIdMarcacionActividad()
    {
        return $this->idMarcacionActividad;
    }

    /**
     * Set the value of idMarcacionActividad
     *
     * @return  self
     */ 
    public function setIdMarcacionActividad($idMarcacionActividad)
    {
        $this->idMarcacionActividad = $idMarcacionActividad;

        return $this;
    }

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
     * Get the value of FechaMarcacion
     */ 
    public function getFechaMarcacion()
    {
        return $this->FechaMarcacion;
    }

    /**
     * Set the value of FechaMarcacion
     *
     * @return  self
     */ 
    public function setFechaMarcacion($FechaMarcacion)
    {
        $this->FechaMarcacion = $FechaMarcacion;

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
     * Get the value of HoraInicio
     */ 
    public function getHoraInicio()
    {
        return $this->HoraInicio;
    }

    /**
     * Set the value of HoraInicio
     *
     * @return  self
     */ 
    public function setHoraInicio($HoraInicio)
    {
        $this->HoraInicio = $HoraInicio;

        return $this;
    }

    /**
     * Get the value of HoraTermino
     */ 
    public function getHoraTermino()
    {
        return $this->HoraTermino;
    }

    /**
     * Set the value of HoraTermino
     *
     * @return  self
     */ 
    public function setHoraTermino($HoraTermino)
    {
        $this->HoraTermino = $HoraTermino;

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