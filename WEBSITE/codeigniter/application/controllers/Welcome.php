<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function EnviarEmail()
    {
        // Carrega a library email
        $this->load->library('email');
        //Recupera os dados do formulário
        $dados = $this->input->post();

        $this->email->from($dados['email'],$dados['name']);
		$this->email->subject("GAP Med");
		$this->email->to("guicoutof@gmail.com");
		$this->email->message($dados['mensagem']);
		if($this->email->send()){
			redirect(base_url());	
		}else{
			echo $this->email->print_debugger(array('headers'));
		}

		

    }
}
