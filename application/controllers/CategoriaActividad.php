<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriaActividad extends CI_Controller{
    private $errores;

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_CategoriaActividad");
        $this->errores = null;
    }

    public function getAllCategoriaActividadXEstado(){
        if($this->input->is_ajax_request()){
            $data = new stdClass();
            $this->errores = null;
            $idEstado = $this->input->post("idEstado");

            $categoriaActividades = $this->Model_CategoriaActividad->selectXEstado($idEstado);

            if($categoriaActividades != null){
                $data->respuesta = "success";
                $data->categoriaActividades = $categoriaActividades;
            }else{
                $data->respuesta = "error";
                $data->errores[] = $this->Model_CategoriaActividad->getError();
            }

            echo json_encode($data);
        }
    }
}