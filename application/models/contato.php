<?php

class Contato{
    public $nome,$email,$tel,$msg;
    
    public function __construct($nome,$email,$tel,$msg){
        $this->nome=$nome;
        $this->email=$email;
        $this->tel=$tel;
        $this->msg=$msg;
    }
    
    
    
}
