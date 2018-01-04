<?php
class Doctor extends CI_Controller{

	function index(){
		
            $this->load->model('Patients_model');
            $data['pacientes'] = $this->Patients_model->listar();
            $this->load->model('Doctors_model');
            $data['consultas'] = $this->Doctors_model->buscarConsultas($this->session->userdata['cpf']);
            $data['medico'] = $this->Doctors_model->buscarMedico($this->session->userdata['cpf']);

            $this->load->view('doctor',$data);
	}

	function buscarConsultas($cpf){
		$this->load->model('Doctors_model');
		$dados = $this->Doctor_model->buscarConsultas($cpf);
		return $dados;
	}

	public function alterarMedico(){
		if($this->input->post('medicosenha') == $this->input->post('medicoconfsenha')){
			$data['med_nome'] = $this->input->post('mediconome');
			$data['med_email'] = $this->input->post('medicoemail');
			$data['med_senha'] = $this->input->post('medicosenha');
			$data['med_CPF'] = $this->input->post('medicocpf');
			$data['med_telefone'] = $this->input->post('medicotelefone');
			$data['med_endereco'] = $this->input->post('medicoendereco');
			$data['med_cidade'] = $this->input->post('medicocidade');
			$data['med_estado'] = $this->input->post('medicoestado');
			$data['med_pais'] = $this->input->post('medicopais');


			$this->load->model('Doctors_model');
			$this->Doctors_model->alterarMedico($data);
		}
		redirect(base_url('Doctor/index'));
	}
}
?>
