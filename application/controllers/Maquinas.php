<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Maquinas extends CI_Controller{
    public function __construct() {
		parent:: __construct();
        $this->load->database();
		$this->load->model('Maquinaria_model');
      

	}

    public function index(){
        $data["Maquinaria"]= $this->Maquinaria_model->mostrar_maquinaria();
        $this->load->view('Maquinaria', $data);
    }
    public function add_maquinaria(){
        //$data['id_tipo'] = $tipo;
        $this->load->view('NewMaquinaria');
    }
    public function save_maquinaria(){
        $data['codigo'] = $_POST["codigo"];
        $data['nombre'] = $_POST["nombre"];
        $data['tipo'] = $_POST["tipo"];
        $data['descripcion'] = $_POST["descripcion"];
        $this->Maquinaria_model->insert_maquinaria($data);
        redirect('/maquinaria/');
    }
    public function acccion_maquinaria(){
        $data['id'] = $this->Maquinaria_model->obtener_maquinaria($_REQUEST["ID"]);
        $this->load->view('updMaquinaria', $data);
    }
   

}
?>