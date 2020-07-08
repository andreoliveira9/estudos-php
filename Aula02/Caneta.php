<?php

class Caneta{
    private $modelo;
    private $cor;
    private $ponta;
    private $carga;
    private $tampada;

    public function __construct( $m, $c, $p){
        $this->setModelo($m);
        $this->setCor($c);
        $this->setPonta($p);
        $this->tampar();
        
    }
    public function tampada(){
        $this->tampada = true;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo( $m ){
        $this->modelo = $m;
        return $this->modelo;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor( $c ){
        $this->cor = $c;
        return $this->cor;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta( $p ){
        $this->ponta = $p;
        return $this->ponta;
    }


    public function rabiscar(){

        if ($this->tampada == true) {
            echo "<p>ERRO! Não posso rabiscar</p>";
        }else{
            echo "<p>Estou rabiscando...</p>";
        }
        
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }
}