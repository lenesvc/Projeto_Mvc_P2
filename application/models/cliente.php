<?php

class CLiente{
    public $nome,$cnpj,$email,$tel,$endereco;
    
    public function __construct($nome,$cnpj,$email,$tel,$endereco){
        $this->nome=$nome;
        $this->cnpj=$cnpj;
        $this->email=$email;
        $this->tel=$tel;
        $this->endereco=$endereco;
    }
    
    
    
}
