<?php

abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    public function __construct($no, $id, $se){
        $this->setNome($no);
        $this->setIdade($id);
        $this->setSexo($se);
        $this->setExperiencia(0);
        
    }

    protected function ganharExp($n){
         $this->setExperiencia( $this->getExperiencia() + $n );
     }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of sexo
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */ 
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get the value of experiencia
     */ 
    public function getExperiencia()
    {
        return $this->experiencia;
    }

    /**
     * Set the value of experiencia
     *
     * @return  self
     */ 
    public function setExperiencia($experiencia)
    {
        $this->experiencia = $experiencia;

        return $this;
    }
}