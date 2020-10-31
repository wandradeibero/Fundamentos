<?php
    require_once("IMascota.php");
    require_once("Animal.php");

    class Perro extends Animal implements IMascota{
        public function Alimentar(){
            echo "El perro es alimentado por su amo 3 veces al día<br>";
        }

        public function Dormir(){
            echo "El perro duerme 4 veces al día y la noche entera<br>";
        }

        public function Pasear()
        {
            echo "El perro es paseado 3 veces al día<br>";
        }

        public function Caminar(){
            echo "El perro camina en el parque durante el paseo<br>";
        }

        public function Jugar(){
            echo "Al perro le gusta jugar con sus amos durante el día<br>";
        }

        public function Mostrar(){
            $this->Alimentar();
            $this->Dormir();
            $this->Pasear();
            $this->Caminar();
            $this->Jugar();
            echo "--------------------------------------------------------------<br>";
        }
    }
?>