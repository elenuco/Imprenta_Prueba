<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Maquinaria_model extends CI_Controller{
    public function __construct()
    {
        $this->load->database();
    }
public function mostrar_maquinaria() {
    $maquinaria = $this->db->get('maquinaria');
    return $maquinaria->result();
}
}
?>