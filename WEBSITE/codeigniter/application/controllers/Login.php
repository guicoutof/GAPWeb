<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); // linha de proteção ao controller
 
class Login extends CI_Controller{ // criação da classe Login
 
    public function autenticar(){
 
        $this->load->model("usuarios_model");// chama o modelo usuarios_model
        $email = $this->input->post("email");// pega via post o email que venho do formulario
        $senha = $this->input->post("senha"); // pega via post a senha que venho do formulario
        $usuario = $this->usuarios_model->buscaPorEmailSenha($email,$senha); // acessa a função buscaPorEmailSenha do modelo
 
        if($usuario[1] == 'medico'){
            $this->load->view('doctor');
        }else if($usuario[1] == 'paciente'){
            $this->load->view('patient');
        }
 

    }

    public function index(){
        $this->load->view('login');
    }
}