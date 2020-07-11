<?php

require_once "Animal.php";

class Ave extends Animal{
    private $corPena;

    public function locomover(){
        echo "<p>voando</p>";
    }
    public function alimentar(){
        echo "<p>Comendo frutas</p>";
    }
    public function emitirSom(){
        echo "<p>som de ave</p>";
    }
    public function fazerNinho(){
        echo "<p>construiu o Ninho</p>";
    }
    
    public function getCorPena()
    {
        return $this->corPena;
    }

    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;

        return $this;
    }
}