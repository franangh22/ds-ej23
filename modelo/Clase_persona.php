<?php

    class persona{
        public $Nombre;
        public $Direccion;
        public $NroDoc;
        public $Edad;
        public $Nacionalidad;

        public function MostrarDatos(){
            echo "<--- Persona ---> <br>";
            echo "Nombre: " . $this->Nombre . "<br>";
            echo "Direccion: " . $this->Direccion . "<br>";
            echo "Nro Documento: " . $this->NroDoc . "<br>";
            echo "Edad: " . $this->NroDoc . "<br>";

            echo "<hr>";
            echo "<--- Nacionalidad ---> <br>";
            echo "ID: " . $this->Nacionalidad->Id . "<br>";
            echo "Descripción: " . $this->Nacionalidad->Description . "<br>";

        }
    }



?>