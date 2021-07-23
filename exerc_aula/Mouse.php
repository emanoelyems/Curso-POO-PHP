<?php
// Aula 02 - POO Curso em Video
// Exercícios

//Exercício 1 - Objeto Concreto

class Mouse{
 var $modelo;
 var $cor;
 var $ligar;


    function ligado(){
        $this->ligar = true;
    }

    function desligado(){
        $this->ligar = false;
    }

    function clicar(){
        if($this->ligar == true){
            echo "<p>O mouse está ligado! Pode clicar!</p>";
        }else{
            echo"<p>ERRO! Mouse desligado!</p>";
        }

    }


}