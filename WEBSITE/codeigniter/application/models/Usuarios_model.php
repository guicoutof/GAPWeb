<?php
class Usuarios_model extends CI_Model{
    public function buscaPorEmailSenha($email, $senha){
        $this->db->where("med_email", $email);

        $this->db->where("med_senha", $senha);

        $usuario = $this->db->get("medico")->row_array();

        $tipo = "medico";
        if (is_null($usuario)){
        	$tipo = "paciente";
        	$this->db->where("pac_email", $email);

        	$this->db->where("pac_senha", $senha);

        	$usuario = $this->db->get("paciente")->row_array();
        }


        return array($usuario, $tipo);
    }
}