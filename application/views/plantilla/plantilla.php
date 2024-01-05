<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('componentes/head');
$this->load->view('contenido/'.$contenido);
$this->load->view('componentes/footer');