<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Maquinaria_model extends CI_Controller{
    
public function mostrar_maquinaria() {
    $maquinaria = $this->db->get("maquinaria");
    return $maquinaria->result();
}
 public function insert_maquinaria($data){
        $this->db->insert('maquinaria', $data);
 }
 public function delete_maquinaria($id){
        $this->db->where('id', $id);
        $this->db->delete('consultorio');
 }
 public function obtener_maquinaria($id){
        $this->db->where('id', $id);
        $maquinaria=$this->db->get('maquinaria');
        return $maquinaria->result();
 }
 public function update_consultorio($data){
        $this->db->where('id', $data['id']);
        return $this->db->update('maquinaria', $data);
 }
}
?>