<?php
    require_once("Perro.php");
    $perro = new Perro();
    $perro->Mostrar();

    require_once("Gato.php");
    $gato = new Gato();
    $gato->Mostrar();

    require_once("Leon.php");
    $leon = new Leon();
    $leon->Mostrar();

    require_once("Cocodrilo.php");
    $cocodrilo = new Cocodrilo();
    $cocodrilo->Mostrar();
?>