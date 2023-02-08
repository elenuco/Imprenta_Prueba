<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Maquinas extends CI_Controller{
    public function __construct() {
		parent:: __construct();
		$this->load->model('Maquinaria_model');
      

	}

    public function index(){
        $data["maquinaria"]= $this->Maquinari_model->mostrar
        $this->load->view('Maquinaria', $data);
    }
}
?>