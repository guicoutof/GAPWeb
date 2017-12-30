<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); // linha de proteção ao controller
 
class Patients extends CI_Controller{ 
 
    public function adicionar(){
        //var_dump($this->input->post());die;

        $data['pac_nome'] = $this->input->post("pacientenome");
        $data['pac_email'] = $this->input->post("pacienteemail");// pega via post o email que venho do formulario
        $data['pac_senha'] = $this->input->post("pacientesenha"); // pega via post a senha que venho do formulario
        $data['pac_CPF'] = $this->input->post("pacientecpf");
        $data['pac_telefone'] = $this->input->post("pacientetelefone");
        $data['pac_endereco'] = $this->input->post("pacienteendereco");
        $data['pac_cidade'] = $this->input->post("pacientecidade");
        $data['pac_estado'] = $this->input->post("pacienteestado");
        $data['pac_pais'] = $this->input->post("pacientepais");

        if($this->input->post('pacienteconfsenha') != $this->input->post('pacientesenha')){
            $this->session->set_flashdata('senha', 'Senha não confere');
            $this->load->view('doctor');
            return;
        }


        $this->load->model("Patients_model");// chama o modelo usuarios_model
        $status = $this->Patients_model->adicionarPaciente($data);

        // if($status){
        //     echo 'Paciente adicionado';
        // }else{
        //     echo 'Paciente nao adicionado';
        // }
 
 

    }



}