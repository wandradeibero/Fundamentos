<?php
require_once("IMascota.php");
require_once("Animal.php");

class Gato extends Animal implements IMascota{
    public function Alimentar(){
        echo "El gato es alimentado por su amo 4 veces al día<br>";
    }

    public function Dormir(){
        echo "El gato duerme durante el día, es nocturno<br>";
    }

    public function Pasear()
    {
        echo "El gato pasea solo y durante la noche<br>";
    }

    public function Caminar(){
        echo "El gato camina a ratos por la casa durante el día<br>";
    }

    public function Jugar(){
        echo "Al gato le gusta jugar con una bola de lana<br>";
    }

    public function Mostrar(){
        $this->Alimentar();
        $this->Dormir();
        $this->Pasear();
        $this->Caminar();
        $this->Jugar();
        echo "-------------------------------------------------------------<br>";
    }
}

?>