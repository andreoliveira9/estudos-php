<?php
require "Lutador.php";

class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    function __construct()  {
        
    }

    public function marcarLuta($l1, $l2){
        if ($l1->getCategoria() == $l2->getCategoria() && $l1 != $l2){
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
            echo "<p>A luta foi aprovada</p>";
        }
    }
    public function luta(){
        if($this->getAprovada()){
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor) {
                case 0:
                    echo "<h1>A luta empatou!!!</h1>";
                    $this->getDesafiado()->empatarLuta(1);
                    $this->getDesafiante()->empatarLuta(1);
                    break;
                
                case 1://Ganhou desafiado
                    echo "<h1>". $this->getDesafiado()->getNome() . " ganhou!!!</h1>";
                    $this->getDesafiado()->ganharLuta(1);
                    $this->getDesafiante()->perderLuta(1);
                    # code...
                    break;
                case 2://Ganhou desafiante
                    echo "<h1>". $this->getDesafiante()->getNome() . " ganhou!!!</h1>";
                    $this->getDesafiante()->ganharLuta(1);
                    $this->getDesafiado()->perderLuta(1);
                    # code...
                    break;
            }
        }else{
            echo "Luta não foi aprovada";
        }
    }

    public function getDesafiado()
    {
        return $this->desafiado;
    }
    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;

        return $this;
    }
    public function getDesafiante()
    {
        return $this->desafiante;
    }
    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;

        return $this;
    }
    public function getRounds()
    {
        return $this->rounds;
    }
    public function setRounds($rounds)
    {
        $this->rounds = $rounds;

        return $this;
    }
    public function getAprovada()
    {
        return $this->aprovada;
    }
    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;

        return $this;
    }
}