<?php

class Caderno{
    var $marca;
    var $largura;
    var $comprimento;
    var $numeroFolhas;
    var $cor;
    var $aberto;

    function abrir(){
        $this->aberto = true;
        echo "<p>O caderno está aberto</p>";
    }
    function fechar(){
        $this->aberto = false;
        echo "<p>O caderno está fechado</p>";
    }
}