<?php
require_once "Aluno.php";

class Bolsista extends Aluno{
    private $bolsa;

    public function pagarMensalidade(){
        echo "<p><b>{$this->getNome()}</b> é bolsista! Então paga com desconto!</p>";
    }
    public function renovarBolsa(){
        "<p>Bolsa renovada</p>";
    }

    public function getBolsa()
    {
        return $this->bolsa;
    }

    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;

        return $this;
    }
}