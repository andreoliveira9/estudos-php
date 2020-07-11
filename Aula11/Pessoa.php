<?php

abstract class  Pessoa{

    private $nome;
    private $idade;
    private $sexo;

    function __construct()
    {
        
    }
   
    public final function FazerAniv(){
        $this->setIdade($this->getIdade() + 1);
        echo "<p>Parabéns!! Você fez". $this->getIdade."</p>";
    }
 
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }
}