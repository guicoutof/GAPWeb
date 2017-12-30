<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); // linha de proteção ao controller
 
class Consulta extends CI_Controller{ 
 
    public function adicionar(){

        $pac_cpf= $this->input->post("paccpf");
        $data['med_CPF'] = $this->session->userdata['cpf'];
        
        $this->load->model("Patients_model");
        $dados = $this->Patients_model->buscarPacienteCpf($pac_cpf);
        if($dados){
            $data['pac_CPF'] = $dados['pac_CPF'];
        }else{
            echo 'Paciente nao encontrado';
            return;
        }


        $this->load->model("Consulta_model");// chama o modelo usuarios_model
        $status = $this->Consulta_model->adicionarConsulta($data);
        redirect(base_url('Doctor/index'));
 

    }

    public function index($con_id){
        $data['con_id'] = $con_id;

        $this->load->model("Consulta_model");
        $procedimentos = $this->Consulta_model->buscarProcedimento($con_id);


        $data['procedimentos'] = $procedimentos;

        $this->load->view('consulta/consulta',$data);
    }

    public function procedimento($proc_id){
        $data['proc_id'] = $proc_id;

        $this->load->model('Consulta_model');
        $data['instrucoes'] = $this->Consulta_model->buscarInstrucao($proc_id);
        $data['medicamentos'] = $this->Consulta_model->listarMedicamentos();

        $this->load->view('consulta/procedimento',$data);
    }


    public function addProcedimento($con_id){
        $data['con_id'] = $con_id;
        $this->load->model('Consulta_model');
        $this->Consulta_model->addProcedimento($data);

        $this->index($con_id);


    }

    public function addInstrucao(){

        $data['proc_id'] = $this->session->userdata('proc_id');

        $data['mdc_id'] = $this->input->post('mdc_id');
        $radio = $this->input->post('ins_procedimento');
        if($radio == 'geral'){
            $data['ins_geral'] = 1;
            $data['ins_procedimento'] = 0;
        }else{
            $data['ins_geral'] = 0;
            $data['ins_procedimento'] = 1;
        }

        $data['ins_descricao'] = $this->input->post('ins_descricao');

        $this->load->model('Consulta_model');
        $this->Consulta_model->addInstrucao($data);
        redirect(base_url('Consulta/procedimento/'.$this->session->userdata('proc_id')));

    }

    public function addMedicamentos(){
        $data['mdc_nome'] = $this->input->post('medicamento');
        $data['mdc_descricao'] = $this->input->post('descricao');
        $data['mdc_intervalo_dia'] = $this->input->post('qtdpordia');
        $data['mdc_intervalo_limite'] = $this->input->post('qtdprazo');

        $this->load->model('Consulta_model');
        $this->Consulta_model->addMedicamento($data);
        redirect(base_url('Consulta/procedimento/'.$this->session->userdata('proc_id')));

    }



}