<?php

// Aula 02 - POO Curso em Video
// Exercícios

//Exercício 2 - Objeto Abstrato

class Aula{
    var $horaAula; //Hora da Aula
    var $professor;
    var $materia;

    function horaIni(){
        $this->horaAula = true; // Horario de inicio da aula
    } 

    function horaFim(){
        $this->horaAula = false; // Horario de Fim da aula
    }

    function hora(){ // Verifica a hora p/ saber se está ou não no horario da aula
        if($this->horaAula == true){
            echo"Está no horário da aula!";
        }else{
            echo"Ainda não está no horario da aula";
        }
    }



}