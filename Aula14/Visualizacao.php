<?php 

require_once "Video.php";
require_once "Gafanhoto.php";

class Visualizacao{
    private $espectador;
    private $filme;

    public function __construct($espec, $fi){
        $this->setEspectador($espec);
        $this->setFilme($fi);
        $this->getFilme()->setViews($this->getFilme()->getViews()+1);
        $this->getEspectador()->setTotAssistido( $this->getEspectador()->getTotAssistido() + 1);
    }
    public function avaliar(){
        $this->getFilme()->setAvaliacao( 5 );
    }
    public function avaliarNota($nota){
        $this->getFilme()->setAvaliacao( $nota );
    }
    public function avaliarPorc($porc){
        $nota = 0;

        if($porc <= 20){
            $nota = 3;
        }else if($porc <= 50){
            $nota = 5;
        }else if($porc <= 90){
            $nota = 8;
        }else{
            $nota = 10;
        }
        $this->getFilme()->setAvaliacao( $nota );
    }
    /**
     * Get the value of espectador
     */ 
    public function getEspectador()
    {
        return $this->espectador;
    }

    /**
     * Set the value of espectador
     *
     * @return  self
     */ 
    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;

        return $this;
    }

    /**
     * Get the value of filme
     */ 
    public function getFilme()
    {
        return $this->filme;
    }

    /**
     * Set the value of filme
     *
     * @return  self
     */ 
    public function setFilme($filme)
    {
        $this->filme = $filme;

        return $this;
    }
}