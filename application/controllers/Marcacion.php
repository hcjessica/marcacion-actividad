<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH."dto/DtoMarcacionActividad.php";
class Marcacion extends CI_Controller {

	private $errores;

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Model_MarcacionActividad");
		$this->errores = null;
		date_default_timezone_set("America/Bogota");
	}

	public function index()
	{
		$data = new stdClass();
		
		$data->title = "Marcación de Actividades";
		$data->recursoscss = ["phone/phone.css", "tablet/tablet.css", "desktop/desktop.css"];
		$data->media = ["screen and (min-width: 0px)", "screen and (min-width: 760px)", "screen and (min-width: 1024px)"];
		$data->recursosjs = ["marcacion.js"];
		$data->contenido = "marcacion";
		$this->load->view('plantilla/plantilla', $data);
	}

	public function registrar(){
		if($this->input->is_ajax_request()){
			$data = new stdClass();
			$this->errores = null;

			$idCategoriaActividad = $this->input->post("slct_categoria");
			$fecMarcacion = $this->input->post("fec_marcacion");
			$descripActividad = trim(nl2br($this->input->post("descrip_act")));
			$horainiMarcacion = $this->input->post("horaini_marcacion");
			$idEstado = 1;

			if($idCategoriaActividad == null){
				$data->respuesta = "error";
				$data->errores[] = "Seleccione una opción";
			}else if($fecMarcacion == ""){
				$data->respuesta = "error";
				$data->errores[] = "Brinde la fecha de la actividad";
			}else if($horainiMarcacion == ""){
				$data->respuesta = "error";
				$data->errores[] = "Brinde la hora de inicio de la actividad";
			}else{
				$dtoMarcacionActividad = new DtoMarcacionActividad();
				$dtoMarcacionActividad->setIdCategoriaActividad($idCategoriaActividad);
				$dtoMarcacionActividad->setFechaMarcacion($fecMarcacion);
				$dtoMarcacionActividad->setDescripcion($descripActividad);
				$dtoMarcacionActividad->setHoraInicio($horainiMarcacion);
				$dtoMarcacionActividad->setIdEstado($idEstado);
				$dtoMarcacionActividad->setFechaRegistro(date("Y-m-d h:i:s"));

				$result = $this->Model_MarcacionActividad->registrarMarcacion($dtoMarcacionActividad);
				
				if($result != null){
					$data->respuesta = "success";
				}else{
					$data->respuesta = "error";
					$data->errores[] = $this->Model_MarcacionActividad->getError();
				}
			}

			echo json_encode($data);
			exit();
		}
	}
}
