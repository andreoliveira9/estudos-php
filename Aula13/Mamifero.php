<?php

require_once "Animal.php";

class Mamifero extends Animal{
    private $corPelo;

   
    public function emitirSom(){
        echo "<p>som de Mamífero</p>";
    }

    public function getCorPelo()
    {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;

        return $this;
    }
}