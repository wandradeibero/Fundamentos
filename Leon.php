<?php
require_once("ISalvaje.php");
require_once("Animal.php");

class Leon extends Animal implements ISalvaje{
    public function Alimentar(){
        echo "El León busca su propiop alimento junto a las leonas<br>";
    }

    public function Dormir(){
        echo "El leon duerme en la selva en las horas de la noche<br>";
    }

    public function Cazar()
    {
        echo "El león apoya la cacería de las leonas<br>";
    }

    public function Atacar(){
        echo "El león es sigiloso a la hora de atacar<br>";
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