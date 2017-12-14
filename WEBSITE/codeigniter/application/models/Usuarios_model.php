<?php
class Usuarios_model extends CI_Model{
    public function buscaPorEmailSenha($email, $senha){
        $this->db->where("Login", $email);

        $this->db->where("Senha", $senha);

        $usuario = $this->db->get("Medicos")->row_array();

        $tipo = "medico";
        if (is_null($usuario)){
        	$tipo = "paciente";
        	$this->db->where("Login", $email);

        	$this->db->where("Senha", $senha);

        	$usuario = $this->db->get("Pacientes")->row_array();
        }


        return array($usuario, $tipo);
    }
}