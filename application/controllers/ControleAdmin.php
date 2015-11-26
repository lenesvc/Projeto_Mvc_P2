<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControleAdmin extends CI_Controller {
	
		
    
    	public function listarmsg(){
			require_once APPPATH."models/contato.php";
			$this->load->model('model');
			$m = $this->model;
			$usu = $m->serchAllContato();
			$data['usu'] = $usu;
			$this->load->view('listconta',$data);
	
	}
		public function listarcli(){
			require_once APPPATH."models/cliente.php";
			$this->load->model('model');
			$m = $this->model;
			$usu = $m->serchAllCli();
			$data['usu'] = $usu;
			$this->load->view('listcli',$data);
	
	}
    	public function painel(){
		    $x = $this->session->userdata("_ID");
		    if($x === 'admin'){
			    $this->load->view('painel');
		    }else{
			    redirect("Controle/index");
		    }
		  
	   }
	
	public function adicionarcliente(){
		$x = $this->session->userdata("_ID");
		    if($x === 'admin'){
			    $this->load->view('adicionacliente');
		    }else{
			    redirect("Controle/login");
	
		    }
	}
	
	public function adicionarnoticia(){
		$x = $this->session->userdata("_ID");
		    if($x === 'admin'){
			    $this->load->view('adicionanoticia');
		    }else{
			    redirect("Controle/login");
		    }
		
	}
	
	public function adicionarservico(){
		$x = $this->session->userdata("_ID");
		    if($x === 'admin'){
			    $this->load->view('adicionaservico');
		    }else{
			    redirect("Controle/login");
		    }
		
		
	}
        public function logout(){
            $this->session->unset_userdata("_ID");
     
            redirect('/Controle/index');
    }
    
    public function insereCliente(){
        require_once APPPATH."models/cliente.php";
	    $this->load->model('model');
    	$x = $this->model;
	    $x->insert(new CLiente($_POST['nome'],$_POST['cnpj'],$_POST['email'],$_POST['tel'],$_POST['endereco']));
	    redirect('/ControleAdmin/adicionarcliente');
    }
    
    public function inserenot(){
        require_once APPPATH."models/noticia.php";
	    $this->load->model('model');
    	$x = $this->model;
	    $x->insertnot(new Noticia($_POST['titulo'],$_POST['data'],$_POST['descricao'],$_POST['url']));
	    redirect('/ControleAdmin/adicionarnoticia');
    }
    
    public function insereserv(){
        require_once APPPATH."models/servico.php";
	    $this->load->model('model');
    	$x = $this->model;
	    $x->insertserv(new Servico($_POST['nome'],$_POST['descricao']));
	    redirect('/ControleAdmin/adicionarservico');
    }
}