<?php
class Patients_model extends CI_Model{
    public function adicionarPaciente($data){
        
    $this->db->insert('Pacientes', $data);
    return ($this->db->affected_rows() == 1 || $this->db->affected_rows() == 0) ? $this->db->insert_id() : false;

    }

    public function buscarPacienteCpf($cpf){
    
    $this->db->where("Cpf", $cpf);

    $usuario = $this->db->get("Pacientes")->row_array();
    return $usuario;
    }
}