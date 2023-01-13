<?php

require_once "Pessoa.php";


Class Aluno extends Pessoa{
    private $login;
    private $totAssistido;



    public function __construct($nome, $idade, $sexo, $totAssistido = 0)
    {
        parent::__construct($nome, $idade, $sexo);
        $this -> totAssistido = $totAssistido;
    }

    private function getLogin(){
        return $this->login;
    }

    private function getTotAssistido(){
        return $this->totAssistido;
    }

    private function setLogin($login){
        $this -> login = $login;
    }

    private function setTotAssistido($totAssistido){
        $this -> totAssistido = $totAssistido;
    }

    public function viuMaisUm(){
        $this->setTotAssistido($this->getTotAssistido() + 1);
    }

    public function boasVindas(){
        $this -> login = "Olá, " . $this -> getNome() . " Você tem " . $this -> idade . " e seu sexo é: " . $this->getSexo();
    }

    public function ganharExp(){
        $this->setExperiencia($this->getExperiencia() + 1);
    }
}

$aluno = new Aluno("Jean", 18, "Masculino", 0);

$aluno -> boasVindas();
$aluno -> viuMaisUm();
$aluno -> ganharExp();

print_r($aluno);




?>