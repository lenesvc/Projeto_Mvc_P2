<?php

class Noticia{
    public $titulo,$data,$descricao,$img;
    
    public function __construct($titulo,$data,$descricao,$img){
        $this->titulo=$titulo;
        $this->data=$data;
        $this->descricao=$descricao;
        $this->img=$img;
        
    }
    
    
    
}
