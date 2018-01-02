<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); // linha de proteção ao controller
 
class Patient extends CI_Controller{ 
 
    public function adicionar(){

        $data['pac_nome'] = $this->input->post("pacientenome");
        $data['pac_email'] = $this->input->post("pacienteemail");
        $data['pac_senha'] = $this->input->post("pacientesenha"); 
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


        $this->load->model("Patients_model");
        $status = $this->Patients_model->adicionarPaciente($data);


    }

    public function index(){

        $this->load->model('Patients_model');
        $data['paciente'] = $this->Patients_model->buscarPacienteCpf($this->session->userdata['cpf']);
        $data['pacprocedimentos'] = $this->Patients_model->buscarPacProcedimentos($this->session->userdata['cpf']);
        //var_dump($data);die;
        $data['medicamentos'] = $this->Patients_model->buscarMedicamento($data['pacprocedimentos']);
        $data['consumos'] = $this->Patients_model->buscarConsumo($data['pacprocedimentos']);

        $this->load->view('patient',$data);
    }

    public function alterarPaciente(){
        if($this->input->post('senha') == $this->input->post('confsenha')){
            $data['pac_CPF'] = $this->input->post('cpf');
            $data['pac_nome'] = $this->input->post('nome');
            $data['pac_email'] = $this->input->post('email');
            $data['pac_senha'] = $this->input->post('senha');
            $data['pac_telefone'] = $this->input->post('telefone');
            $data['pac_endereco'] = $this->input->post('endereco');
            $data['pac_cidade'] = $this->input->post('cidade');
            $data['pac_estado'] = $this->input->post('estado');
            $data['pac_pais'] = $this->input->post('pais');

            $this->load->model('Patients_model');
            $this->Patients_model->alterarPaciente($data);

        }
        $this->index();
    }

    public function buscarPacProcedimentos($cpf){
        $this->load->model('Patients_model');
        $dados = $this->Patients_model->buscarPacProcedimentos($cpf);
        return $dados;
    }

    public function procedimento($proc_id){
        $data['proc_id'] = $proc_id;

        $this->load->model('Patients_model');
        $data['instrucoes'] = $this->Patients_model->buscarPacInstrucao($data);

        $this->load->view('paciente/procedimento',$data);

    }

    public function addConsumo(){
        $data['pac_proc_id'] = $this->input->post('idpracproc');
        $data['mdc_id'] = $this->input->post('idmdc');
        $data['csm_data'] = $this->input->post('datamdc');
        $this->load->model('Patients_model');
        $this->Patients_model->addConsumo($data);

        $this->index();

    }

    public function concluirPacProc($proc_id){
        $this->load->model('Patients_model');

        $data['proc_id'] = $proc_id;
        $data['pac_proc_ativo'] = 0;
        $data['pac_proc_id'] = $this->Patients_model->buscarPacProc($proc_id);

        $this->Patients_model->concluirPacProc($data);

        $this->index();
    }

    
}