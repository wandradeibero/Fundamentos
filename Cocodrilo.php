<?php
require_once("ISalvaje.php");
require_once("Animal.php");

class Cocodrilo extends Animal implements ISalvaje{
    public function Alimentar(){
        echo "El Cocodrilo busca su propio<br>";
    }

    public function Dormir(){
        echo "El Cocodrilo duerme en la selva en las horas de la noche<br>";
    }

    public function Cazar()
    {
        echo "El Cocodrilo caza y normalmente está en el agua<br>";
    }

    public function Atacar(){
        echo "El Cocodrilo es sigiloso a la hora de atacar<br>";
    }


    public function Mostrar(){
        $this->Alimentar();
        $this->Dormir();
        $this->Cazar();
        $this->Atacar();
        echo "-------------------------------------------------------------<br>";
    }
}

?>