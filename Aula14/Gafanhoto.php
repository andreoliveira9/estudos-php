<?php

require_once "Pessoa.php";

class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistido;

    public function __construct($no, $id, $se, $lo){
        parent::__construct($no, $id, $se);
        $this->setLogin($lo);
        $this->setTotAssistido(0);

        
    }
    public function viuMaisUm(){
        $this->setTotAssistido($this->getTotAssistido() + 1);
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of totAssistido
     */ 
    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    /**
     * Set the value of totAssistido
     *
     * @return  self
     */ 
    public function setTotAssistido($totAssistido)
    {
        $this->totAssistido = $totAssistido;

        return $this;
    }
}