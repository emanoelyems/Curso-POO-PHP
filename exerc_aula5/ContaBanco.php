<?php

//Exercício Aula 5A - POO PHP

class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //Métodos

    public function abrirConta($t){
        $this->setTipo($t);             
        $this->setStatus(true);

        if ($t == "CC") {
            $this->setSaldo(50);

        }elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if ($this->getSaldo() > 0) {
            echo"<p>A conta ainda possui dinheiro.Saque o dinheiro para fechar a conta.</p>";
        }elseif ($this->getSaldo() < 0) {
            echo"A conta possui débito. Quite o débito para fechar a conta.";
        }else {
            $this->setStatus(false);
            echo"<p>Conta de {$this->getDono()} fechada com sucesso </p>";
        }
    }

    public function depositar($v){
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo()+ $v);
            echo"<p>Depósito de R$$v na conta de {$this->getDono()}</p>";
        }else {
            echo"Impossível depositar";
        }
    }

    public function sacar($v){
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo()- $v);
                echo"<p>Saque de R$$v autorizado na conta de {$this->getDono()}</p>";
            }else {
                echo"<p>Saldo insufuciente para saque.</p>";
            }
        }else {
            echo"<p>Impossível sacar</p>";
        }
    }

    public function pagarMensal(){
        $v = 0;
        if ($this->getTipo() == "CC") {
            $v = 12;
        }elseif ($this->getTipo() == "CP") {
            $v = 20;
        }

        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo"<p>Mensalidade de R$$v debitada na conta de {$this->getDono()}</p>";
        }else {
            echo"<p>Problemas com a conta.</p>";
        }
    }

    //Métodos Especiais 

    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo"<p>Conta aberta com sucesso!</p>";
    }

    public function getnumConta(){
        return $this->numConta;
    }

    public function setnumConta($n){
        $this->numConta = $n;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getDono(){
        return $this->dono;
    }

    public function setDono($d){
        $this->dono = $d;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($s){
        $this->status = $s;
    }





}