<?php

class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p> conta criada com sucesso</p>";
    }

    public function abrirConta($t, $d ){
        $this->setTipo($t);
        $this->setDono($d);
        if($t =="CC"){
            $this->setSaldo(50);
        }else if($t == "CP"){
            $this->setSaldo(150);
        }
        
        $this->setStatus(true);

    }
    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "<p>Tem Dinheiro na conta</p>";
        }else if($this->getSaldo() < 0){
            echo "<p>Conta em débito</p>";
        }else{
            $this->setStatus(false);
            echo "<p>A conta de {$this->getDono()} foi fechada com sucesso</p>";
        }
        
    }
    public function depositar($d){
        if($this->getStatus()){
            $saldoAtual = $this->getSaldo();
            $saldoReal = $saldoAtual + $d;
            $this->setSaldo($saldoReal);
            echo "<p>depósito de R$ {$d} na conta de {$this->getDono()} </p>";
        }else{
            echo "<p>Impossível Depositar</p>";
        }
       

    }
    public function sacar($v){
        if($this->getStatus()){
            if($this->getSaldo() >= $v){
                $saldo = $this->getSaldo() - $v;
                $this->setSaldo($saldo);
                echo "Saque de R$ {$v} autorizado na conta de {$this->getDono()}";
            }else{
                echo "<p>saldo insuficiente</p>";
            }
        }else{
            echo "<p>impossível sacar</p>";
        }
    }

    public function pagarMensal(){
         if($this->getTipo() == "CC"){
             $v = 12;
         }else if ($this->getTipo() == "CP"){
             $v = 20;
         }

         if($this->getStatus()){
             $this->setSaldo($this->getSaldo() - $v);
             echo "<p>A mensalidade de R$ {$v} foi debitada na conta de {$this->getDono()}</p>";
         }else{
             echo "<p>Problemas com a conta. Não posso cobrar</p>";
         }
    }
    public function setNumConta($n){
        $this->numConta = $n;
    }
    public function getNumConta($n){
        return $this->numConta;
    }
    public function setDono( $d ){
        $this->dono = $d;

    }
    public function getDono(){
        return $this->dono;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setSaldo( $s ){
        $this->saldo = $s;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setStatus( $ss ){
        $this->status = $ss;
    }
    public function getStatus(){
        return $this->status;
    }

}