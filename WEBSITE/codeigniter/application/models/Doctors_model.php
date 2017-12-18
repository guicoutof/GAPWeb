<?php
class Doctors_model extends CI_Model{

	public function buscarMedicoCrm($crm){
    
    $this->db->where("Crm", $crm);

    $usuario = $this->db->get("Medicos")->row_array();
    return $usuario;
    }


    
}