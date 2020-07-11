<?php

class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $peso;
    private $altura;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    function __construct($no, $na, $id, $al, $pe,$vi, $de, $em)
    {
        $this->setNome($no);        
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates( $this->getEmpates() + 1 );
    }
    public function apresentar(){
        echo "<p>-----------------------</p>";
        echo "<p>Chegou a Hora! O lutador  " . $this->getNome() . "</p>";
        echo "<p>Veio diretamente de " . $this->getNacionalidade() . "</p>";
        echo "<p>" . $this->getIdade() . " Anos</p>";
        echo "<p>" . $this->getAltura() . " m de altura</p>";
        echo "<p>Pesando: " . $this->getPeso() . "</p>";
        echo "<p>Ganhou: " . $this->getVitorias() . "</p>";
        echo "<p>Perdeu: " . $this->getDerrotas() . "</p>";
        echo "<p>Empatou: " . $this->getEmpates() . "</p>";
    }
    public function status(){
        echo "<p>------------------------</p>";
        echo "<p>" . $this->getNome() . "</p>";
        echo "<p>É um peso  " . $this->getCategoria() . "</p>";
        echo "<p> Tem " . $this->getVitorias() . ($this->getVitorias() == 1 ? " vitória" : " vitórias") .  "</p>";
        echo "<p>Tem " . $this->getDerrotas() .($this->getDerrotas() == 1 ? " derrota" : " derrotas") . "</p>";
        echo "<p>Tem " . $this->getEmpates() . ($this->getEmpates() == 1 ? " empate" : " empates") ."</p>";
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
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

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
    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
        return $this;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setCategoria()
    {   
        $peso = $this->getPeso();
        if($peso < 52.2){
            $categoria = "Inválido";
        }else if($peso <=70.3){
            $categoria = "Leve";
        }else if($peso <=83.9){
            $categoria = "Médio";
        }else if($peso <=120.2){
            $categoria = "Pesado";
        }else{
            $categoria = "Inválido";
        }
        $this->categoria = $categoria;

        return $this;
    }
    public function getVitorias()
    {
        return $this->vitorias;
    }
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;

        return $this;
    }
    public function getDerrotas()
    {
        return $this->derrotas;
    }
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;

        return $this;
    }
    public function getEmpates()
    {
        return $this->empates;
    }
    public function setEmpates($empates)
    {
        $this->empates = $empates;

        return $this;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }
}