<?php

require "Publicacao.php";
require "Pessoa.php";

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    function __construct($ti, $au, $tot,$le){
        $this->setTitulo($ti);
        $this->setAutor($au);
        $this->setTotPaginas($tot);
        $this->setLeitor($le);
        $this->setPagAtual(0);

        
    }

    public function abrir(){
        $this->setAberto(true);
    }
    public function fechar(){
        $this->setAberto(false);
    }
    public function folhear($p){
        if($p > 0 && $p <= $this->getTotPaginas()){
            $this->setPagAtual($p);
        }else{
            echo "Essa página não existe";
        }
    }
    public function avancarPag(){
        if($this->getPagAtual() > 0 && $this->getPagAtual() < $this->getTotPaginas()){
            $this->setPagAtual($this->getPagAtual() + 1);
        }
        
    }
    public function voltarPag(){
        if($this->getPagAtual() > 0 && $this->getPagAtual() < $this->getTotPaginas()){
            $this->setPagAtual( $this->getTotPaginas() - 1);
        }
    }

    public function detalhes(){
        echo "<p>Título: ". $this->getTitulo()."</p>";
        echo "<p>Autor: ". $this->getAutor() ."</p>";
        echo "<p>Páginas: ". $this->getTotPaginas() ."</p>";
        echo "<p>Página Atual: ". $this->getPagAtual() ."</p>";
        echo "<p>Sendo lido por ". $this->getLeitor()->getNome()."</p>";

    }


    public function getTitulo()
    {
        return $this->titulo;
    }
 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;

        return $this;
    }
 
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;

        return $this;
    }

    public function getAberto()
    {
        return $this->aberto;
    }

    public function setAberto($aberto)
    {
        $this->aberto = $aberto;

        return $this;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;

        return $this;
    }
}