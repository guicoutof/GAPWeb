<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); // linha de proteção ao controller
 
class Prescritions extends CI_Controller{ 
 
    public function adicionar(){
        //var_dump($this->input->post());die;

        $cpf= $this->input->post("prescricaocpf");
        $crm = $this->input->post("prescricaocrm");// pega via post o email que venho do formulario
        
        $this->load->model("Patients_model");
        $dados = $this->Patients_model->buscarPacienteCpf($cpf);
        if($dados){
            $data['ID_Paciente'] = $dados['ID_Paciente'];
        }else{
            echo 'Paciente nao encontrado';
        }

        $this->load->model("Doctors_model");
        $dados = $this->Doctors_model->buscarMedicoCrm($crm);
        if($dados){
            $data['ID_Medico'] = $dados['ID_Medico'];
        }else {
            echo 'Medico nao encontrado';
        }

        $data['Descricao'] = $this->input->post("prescricaodescricao"); // pega via post a senha que venho do formulario

        $this->load->model("Prescritions_model");// chama o modelo usuarios_model
        $status = $this->Prescritions_model->adicionarPrescricao($data);

        if($status){
            echo 'Prescricao adicionada';
        }else{
            echo 'Prescricao nao adicionado';
        }
 
 

    }

}