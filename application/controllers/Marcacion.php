<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marcacion extends CI_Controller {

	private $errores;

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Model_CategoriaActividad");
		$this->errores = null;
	}

	public function index()
	{
		date_default_timezone_set("America/Bogota");
		$data = new stdClass();
		
		$data->title = "Marcación de Actividades";
		$data->recursoscss = ["phone/phone.css", "tablet/tablet.css", "desktop/desktop.css"];
		$data->media = ["screen and (min-width: 0px)", "screen and (min-width: 760px)", "screen and (min-width: 1024px)"];
		$data->recursosjs = ["marcacion.js"];
		$data->contenido = "marcacion";
		$this->load->view('plantilla/plantilla', $data);
	}
}
