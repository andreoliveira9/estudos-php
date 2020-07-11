<?php

class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    function __construct($no, $id, $s){
        $this->setNome( $no );
        $this->setIdade( $id );
        $this->setSexo( $s );
    }

    public function fazerAniver(){
        $this->setIdade($this->getIdade() + 1);
        echo "<p>Feliz Aniversário!!!</p>";
        echo "<p>Você fez". $this->getIdade() ." anos</p>";
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
