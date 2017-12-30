<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); // linha de proteção ao controller
 
class Login extends CI_Controller{ // criação da classe Login
 
    public function autenticar(){
 
        $this->load->model("usuarios_model");// chama o modelo usuarios_model
        $email = $this->input->post("email");// pega via post o email que venho do formulario
        $senha = $this->input->post("senha"); // pega via post a senha que venho do formulario
        $usuario = $this->usuarios_model->buscaPorEmailSenha($email,$senha); // acessa a função buscaPorEmailSenha do modelo
        $this->load->library('session');


        $dados = $usuario[0];
        if($usuario[1] == 'medico'){
            
            $novosdados = array(
                    'cpf' => $dados['med_CPF'],
                   'nome'  => $dados['med_nome'],
                   'email'     => $dados['med_email'],
                   'tipo' => $usuario[1]
               );

            $this->session->set_userdata($novosdados);

            redirect(base_url('Doctor/index'));


        }else if($usuario[1] == 'paciente'){
            $novosdados = array(
                    'cpf' => $dados['pac_CPF'],
                   'nome'  => $dados['pac_nome'],
                   'email'     => $dados['pac_email'],
                   'tipo' => $usuario[1]
               );

            $this->session->set_userdata($novosdados);


            $this->load->view('patient');
        }
        

    }

    public function index(){
        $this->load->view('login');
    }
}