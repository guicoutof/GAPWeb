<?php
class Consulta_model extends CI_Model{

    public function adicionarConsulta($data){
        
    $this->db->insert('consulta', $data);
    return ($this->db->affected_rows() == 1 || $this->db->affected_rows() == 0) ? $this->db->insert_id() : false;

    }

    public function buscarConsulta($data){
        $this->db->where("pac_CPF",$data['pac_CPF']);
        $this->db->where("med_CPF",$this->session->userdata('cpf'));
        return $this->db->get("consulta")->result();
    }


    public function buscarProcedimento($con_id){
    
	    $this->db->where("con_id", $con_id);

	    $procedimento = $this->db->get("procedimento")->result();

	    return $procedimento;
    }

    public function buscarMedicamento($mdc_id){

	    $this->db->where("mdc_id", $mdc_id);

	    $medicamento = $this->db->get("medicamento")->result();
	    return $medicamento;

    }

    public function buscarInstrucao($proc_id){

	    $this->db->where("proc_id", $proc_id);

	    $instrucao = $this->db->get("instrucao")->result();
	    return $instrucao;

    }

    public function addProcedimento($data){
        $this->db->insert('procedimento',$data);
        return ($this->db->affected_rows() == 1 || $this->db->affected_rows() == 0) ? $this->db->insert_id() : false;
    }


    public function addInstrucao($data){
        $this->db->insert('instrucao',$data);
        return ($this->db->affected_rows() == 1 || $this->db->affected_rows() == 0) ? $this->db->insert_id() : false;
    }

        public function addMedicamento($data){
        $this->db->insert('medicamento',$data);
        return ($this->db->affected_rows() == 1 || $this->db->affected_rows() == 0) ? $this->db->insert_id() : false;
    }

    public function listarMedicamentos(){
        return $this->db->get('medicamento')->result();
    }

}