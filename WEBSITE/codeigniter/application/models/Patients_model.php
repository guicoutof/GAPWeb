<?php
class Patients_model extends CI_Model{
    public function adicionarPaciente($data){
        
    $this->db->insert('paciente', $data);
    return ($this->db->affected_rows() == 1 || $this->db->affected_rows() == 0) ? $this->db->insert_id() : false;

    }

    public function buscarPacienteCpf($cpf){
    
    $this->db->where("pac_CPF", $cpf);

    $usuario = $this->db->get("paciente")->row_array();
    return $usuario;
    }

    public function listar(){
		return $this->db->get('paciente')->result();
	}
}