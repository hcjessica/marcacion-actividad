<?php

require_once APPPATH."dto/DtoMarcacionActividad.php";

class Model_MarcacionActividad extends CI_Model{
    private $error;

    public function __construct()
    {
        parent::__construct();
    }

    public function registrarMarcacion(DtoMarcacionActividad $dtoMarcacionActividad){
        $parametros = array();
        $parametros[] = (int) $dtoMarcacionActividad->getIdCategoriaActividad();
        $parametros[] = $dtoMarcacionActividad->getFechaMarcacion();
        $parametros[] = $dtoMarcacionActividad->getDescripcion();
        $parametros[] = $dtoMarcacionActividad->getHoraInicio();
        $parametros[] = (int) $dtoMarcacionActividad->getIdEstado();
        $parametros[] = $dtoMarcacionActividad->getFechaRegistro();

        $query = "INSERT INTO MarcacionActividad(id_CategoriaActividad, FechaMarcacion, Descripcion, HoraInicio, HoraTermino, id_Estado, FechaRegistro) VALUES (?, ?, ?, ?, '', ?, ?)";

        $result = $this->db->query($query, $parametros) or $this->error = strftime("%d/%m/%Y %H:%M:%S").'Model: MarcacionActividad ---registrarMarcacion() --- Error: '.sqlsrv_errors()[0][2];

        if(!isset($this->error)){
            if($this->db->affected_rows() == 0){
                $this->error = "No se pudo registrar la marcación";
                return null;
            }else{
                return true;
            }
        }else{
            return null;
        }
    }

    public function getError() {
        return $this->error;
    }
}