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
 public function update_maquinaria($data){
        $this->db->where('id', $data['id']);
        return $this->db->update('maquinaria', $data);
 }
 public function obtener_tipo ($id_tipo){
       $this->db->where('id_tipo',$id_tipo);
       $tipo=$this->db->get('tipo');
       return $tipo->result();
}
public function update_tipo (){
       $this->db->set('tipo',$data['tipo']);
       $this->db->update('tipo',$data);
}
}
?>