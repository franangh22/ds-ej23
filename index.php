<?php

    require_once "modelo/Clase_persona.php";
    require_once "modelo/Clase_nacionalidad.php";

    #Instanciar clase Nacionalidad
    $Nac = new Nacionalidad();
    $Nac -> Id = 1;
    $Nac -> Description = "Argentina";

    #Instanciar clase persona
    $Per = new persona();
    $Per -> Nombre = "Franco";
    $Per -> Direccion = "undefined";
    $Per -> NroDoc = 43008057;
    $Per -> Edad = 22;
    $Per -> Nacionalidad = $Nac;
    $Per -> MostrarDatos();

?>