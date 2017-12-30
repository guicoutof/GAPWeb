<?php
class Doctors_model extends CI_Model{

	public function buscarConsultas($cpf){
    
    $this->db->where("med_CPF", $cpf);

    $usuario = $this->db->get("consulta")->result();
    return $usuario;
    }

	public function buscarMedico($cpf){
    
    $this->db->where("med_CPF", $cpf);

    $usuario = $this->db->get("medico")->result();
    return $usuario;
    }

    public function alterarMedico($data){
    	$this->db->where("med_CPF",$data['med_CPF']);
    	$this->db->replace('medico',$data);
    }

    
}