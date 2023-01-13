<?php
require_once "acoesVideo.php";

Class video implements AcoesVideo{

    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;


    public function __construct($titulo, $avaliacao = 1, $views = 0, $curtidas = 0, $reproduzindo = false)
    {
        $this -> titulo = $titulo;
        $this -> avaliacao = $avaliacao;
        $this -> views = $views;
        $this -> curtidas = $curtidas;
        $this -> reproduzindo = $reproduzindo;
    }

    private function getTitulo(){
        return $this -> titulo;
    }

    private function getAvaliacao(){
        return $this-> avaliacao;
    }
    private function getViews(){
        return $this -> views;
    }

    private function getCurtidas(){
        return $this -> curtidas;
    }

    private function getReproduzindo(){
        return $this -> reproduzindo;
    }


    private function setTitulo($titulo){
        $this -> titulo = $titulo;
    }

    private function setAvaliacao($avaliacao){
        $this -> avaliacao = $avaliacao;
    }

    private function setViews($views){
        $this -> views = $views;
    }

    private function setCurtidas($curtidas){
        $this -> curtidas = $curtidas;
    }

    private function setReproduzindo($reproduzindo){
        $this -> reproduzindo = $reproduzindo;
    }

    public function play(){
        $this -> setReproduzindo(true);
    }

    public function pause(){
        $this -> setReproduzindo(false);
    }

    public function like(){
        $this->setCurtidas($this->getCurtidas() + 1);
    }

    public function views(){
        $this->setViews($this->getViews() + 1);
    }

}

$aluno  = new video("CURSO POO", 1, 0, 0, false); 

$aluno -> play();
$aluno ->like();
$aluno -> views();

print_r($aluno);
?>