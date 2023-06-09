<?php

    require_once "modelo/Clase_persona.php";
    require_once "modelo/Clase_nacionalidad.php";

    #Instanciar clase Nacionalidad
    $Nac = new Nacionalidad();
    $Nac -> Id = 1;
    $Nac -> Description = "Albuquerque, Nuevo mexico";

    #Instanciar clase persona
    $Per = new persona();
    $Per -> Nombre = "Walter White";
    $Per -> Direccion = "308 de Negra Arroyo Lane";
    $Per -> NroDoc = "";
    $Per -> Edad = 50;
    $Per -> Nacionalidad = $Nac;
    $Per -> MostrarDatos();

?>