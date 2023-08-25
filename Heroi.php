<?php

class Heroi
{

    public $nome;
    public $idade;
    public $tipo;

    
    public function atacar() 
    {
        if($this->tipo == "mago")
        {
            echo $this->tipo." atacou usando magia";
        }
        elseif($this->tipo == "guerreiro")
        {
            echo $this->tipo." atacou usando espada";
        }
        elseif($this->tipo == "monge")
        {
            echo $this->tipo." atacou usando artes marciais";
        }
        elseif($this->tipo == "ninja")
        {
            echo $this->tipo." atacou usando shuriken";
        }

    }
}

$heroi = new Heroi();
$heroi->tipo = "guerreiro";
$heroi->atacar();

?>