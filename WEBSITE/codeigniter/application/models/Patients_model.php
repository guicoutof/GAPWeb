<?php
class Patients_model extends CI_Model{
    public function adicionarPaciente($data){
        
    $this->db->insert('paciente', $data);
    return ($this->db->affected_rows() == 1 || $this->db->affected_rows() == 0) ? $this->db->insert_id() : false;

    }

    public function buscarPacienteCpf($cpf){
    
    $this->db->where("pac_CPF", $cpf);

    $usuario = $this->db->get("paciente")->result();
    return $usuario;
    }

    public function listar(){
		return $this->db->get('paciente')->result();
	}

    public function alterarPaciente($data){
        $this->db->where("pac_CPF",$data['pac_CPF']);
        $this->db->replace('paciente',$data);
        return;
    }


    public function buscarPacProcedimentos($cpf){
    
        $this->db->where("pac_CPF", $cpf);

        $consulta = $this->db->get("consulta")->result();
        
        $i=0;
        if(sizeof($consulta) >0){

        foreach($consulta as $consulta){
            $this->db->where("con_id",$consulta->con_id);
            $procedimentos[$i] = $this->db->get("procedimento")->result();
            $i++;
        }
        // var_dump($procedimentos);die;
        $i=0;
        foreach($procedimentos as $procedimento){
            foreach ($procedimento as $proc) {
                $this->db->where("proc_id",$proc->proc_id);
                $pacprocedimentos[$i] = $this->db->get("pac_proc")->result();
                $i++;
            }
                
        }
        
        // var_dump($pacprocedimentos);die;
        return $pacprocedimentos;
        }return ;
    }

    public function buscarPacInstrucao($data){

        $this->db->where("proc_id", $data['proc_id']);

        $instrucoes = $this->db->get("instrucao")->result();
        return $instrucoes;
    
    }

    public function buscarMedicamento($dados){
        //var_dump($dados);die;
        if(!is_null($dados)){
            $i=0;
            foreach($dados as $dado){
                foreach ($dado as $dad) {
                    $this->db->where("proc_id",$dad->proc_id);
                    $instrucoes[$i] = $this->db->get("instrucao")->result();
                    $i++;
                }       
            }
            //var_dump($instrucoes);die;
            $i=0;
            foreach ($instrucoes as $instrucao) {
                foreach ($instrucao as $inst) {
                    $this->db->where("mdc_id",$inst->mdc_id);
                    $medicamentos[$i] = $this->db->get("medicamento")->result();
                    $i++;
                }
            }
            // var_dump($medicamentos);die;
            return $medicamentos;
        }return;
    }

    public function buscarConsumo($dados){
        //var_dump($dados);die;
        if(!is_null($dados)){
        $i=0;
        foreach ($dados as $dado) {
            foreach ($dado as $dad) {
                $this->db->where("pac_proc_id",$dad->pac_proc_id);
                $consumo[$i] = $this->db->get("consumo_medicamento")->result();
                $i++;
            }
        }
        //var_dump($consumo);die;
        return $consumo;
        } return;
    }

    public function addConsumo($data){
        $this->db->insert('consumo_medicamento', $data);
    return ($this->db->affected_rows() == 1 || $this->db->affected_rows() == 0) ? $this->db->insert_id() : false;
    }

    public function buscarPacProc($data){

        $this->db->where("proc_id",$data);
        $pac_proc = $this->db->get("pac_proc")->result();

        return $pac_proc[0]->pac_proc_id;
    }

    public function concluirPacProc($data){

        $this->db->where('pac_proc_id',$data['pac_proc_id']);
        $this->db->replace('pac_proc',$data);
        return;
    }

}