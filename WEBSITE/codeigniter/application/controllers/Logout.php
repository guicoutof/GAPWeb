<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); // linha de proteção ao controller
 
class Logout extends CI_Controller{ // criação da classe Login
 
    public function index(){
 
    	session_destroy();
        $this->load->view('index');
 

    }

}