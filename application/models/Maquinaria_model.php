<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Maquinaria_model extends CI_Controller{
public function mostrar_consultorio() {
    $maquina = $this->db->get('maquina');
    return $maquina->result();
}
}
?>