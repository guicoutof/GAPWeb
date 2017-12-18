<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); // linha de proteção ao controller
 
class Patients extends CI_Controller{ 
 
    public function adicionar(){
        //var_dump($this->input->post());die;

        $data['Nome'] = $this->input->post("pacientenome");
        $data['Login'] = $this->input->post("pacienteemail");// pega via post o email que venho do formulario
        $data['Senha'] = $this->input->post("pacientesenha"); // pega via post a senha que venho do formulario
        $data['Cpf'] = $this->input->post("pacientecpf");
        $data['Telefone'] = $this->input->post("pacientetelefone");
        $data['Endereco'] = $this->input->post("pacienteendereco");
        $data['Cidade'] = $this->input->post("pacientecidade");
        $data['Estado'] = $this->input->post("pacienteestado");
        $data['Pais'] = $this->input->post("pacientepais");



        $this->load->model("Patients_model");// chama o modelo usuarios_model
        $status = $this->Patients_model->adicionarPaciente($data);

        if($status){
            echo 'Paciente adicionado';
        }else{
            echo 'Paciente nao adicionado';
        }
 
 

    }



}