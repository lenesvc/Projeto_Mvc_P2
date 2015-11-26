<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controle extends CI_Controller {
    
    public function index(){
        
        $this->load->view('index');
    }
    public function sobre(){
        
        $this->load->view('about');
    }
    public function maquina(){
        
        $this->load->view('sidebar-left');
    }
    public function handle(){
        
        $this->load->view('sidebar-right');
    }
    public function contato(){
        
        $this->load->view('contact');
    }
    public function login(){
        
        $this->load->view('login');
    }
    
     
    
    public function insereCont(){
        require_once APPPATH."models/contato.php";
	    $this->load->model('model');
    	$x = $this->model;
	    $x->insertcont(new Contato($_POST['nome'],$_POST['email'],$_POST['tel'],$_POST['msg']));
	    redirect('/Controle/index');
	
        
    }
    
    	 public function auth(){
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $this->load->model("model");
        $usr = $this->model->User($email,$senha);
        if($usr !== false){
            if($usr === "admin"){
                $this->session->set_userdata("_ID","admin");
                redirect("/ControleAdmin/adicionarcliente");
            }else{
                
                redirect("/Controle/login");
            }
        }else{
            redirect("/Controle/Login");
        }
    }
}
