<?php

require_once APPPATH."dto/DtoCategoriaActividad.php";

class Model_CategoriaActividad extends CI_Model{
    private $error;

    public function __construct(){
        parent::__construct();
    }

    public function selectXEstado($idEstado){
        $parametros = array();
        $parametros[] = $idEstado;

        $query = "SELECT id_CategoriaActividad, Descripcion FROM CategoriaActividad WHERE id_Estado = ? ORDER BY 2 ASC";

        $result = $this->db->query($query, $parametros) or $this->error = strftime("%d/%m/%Y %H:%M:%S").'Model: CategoriaActividad ---selectXEstado() --- Error: '.sqlsrv_errors()[0][2];

        if(!isset($this->error)){
            if(count($result->result()) > 0){
                return $result->result();
            }else{
                return "vacio";
            }
        }else{
            return null;
        }
    }
}