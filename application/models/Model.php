<?php

class Model extends CI_Model{
    
    public function insertcont(Contato $cont){
        $data['nm_nome'] = $cont->nome;
        $data['ds_email'] = $cont->email;
        $data['nr_tel'] = $cont->tel;
        $data['ds_msg'] = $cont->msg;
        $this->db->insert("Contato",$data);
    }

    public function insert(Cliente $cli){
        $data['nm_Cliente'] = $cli->nome;
        $data['nr_Cnpj'] = $cli->cnpj;
        $data['ds_Email'] = $cli->email;
        $data['nr_Tel'] = $cli->tel;
        $data['ds_Endereco'] = $cli->endereco;
        $this->db->insert("Cliente",$data);
    }
    
    public function insertnot(Noticia $not){
        $data['nm_noticia'] = $not->titulo;
        $data['dt_noticia'] = $not->data;
        $data['ds_noticia'] = $not->descricao;
        $data['nm_Imagen'] = $not->img;
        $this->db->insert("Noticia",$data);
    }
    
    public function insertserv(Servico $serv){
        $data['nm_servico'] = $serv->nome;
        $data['ds_servico'] = $serv->descricao;
        $this->db->insert("Servicos",$data);
    }
    
    public function User($email,$senha){
		$this->db->where('email',$email);
		$this->db->where('senha',$senha);
		$a = $this->db->get('Usuario');
		if ($a->num_rows()>0){
			if($a->row()->email === "silvas_rosilene@gmail.com"){
				return "admin";
			}else{
				return "comum";
			}
		}else{
			return false;
		}
	}
	
	public function serchAllContato(){
            
            $query= $this->db->query("Select * from Contato");
            return $query->result();
        }
    public function serchAllCli(){
            
            $query= $this->db->query("Select * from Cliente");
            return $query->result();
        }
        
    

}