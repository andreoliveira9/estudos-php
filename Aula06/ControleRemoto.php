<?php
require 'Controlador.php';

class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;
    
    function __construct(){
        $this->setVolume(50);
        $this->ligado = false;
        $this->tocando = false;
    }
   
    private function getTocando()
    {
        return $this->tocando;
    }

    private function setTocando($tocando)
    {
        $this->tocando = $tocando;

        return $this;
    }

    private function getLigado()
    {
        return $this->ligado;
    }

    private function setLigado($ligado)
    {
        $this->ligado = $ligado;

        return $this;
    }

    private function getVolume()
    {
        return $this->volume;
    }

    private function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }
    public function ligar(){
        $this->setLigado(true);
        
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo "<p>Está ligado?". ($this->getLigado() ? "SIM" : "NÃO") ."</p>";
        echo "<p>Está tocando?". ($this->getTocando() ? "SIM" : "NÃO") ."</p>";
        echo "<p> Volume : " . ($this->getVolume()); 
        for ($i=0; $i < $this->getVolume() ; $i+=10) { 
            echo "|";
        }
        echo "<br>";

    }
    public function fecharMenu(){
        echo "<p>Fechando menu...</p>";
    }
    public function maisVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 10 );
        }else{
            echo "<p> Erro! Não posso aumentar o volume</p>";
        }
    }
    public function menosVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 10 );
        }else{
            echo "<p> Erro! Não posso diminuir o volume</p>";
        }
    }
    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    public function play(){
        if($this->getLigado() && !$this->getTocando()){
            $this->getTocando(true);
        }
    }
    public function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->getTocando(false);
        }
    }
}