<?php

class Empleado
{
    private $nombre;
    private $sueldo;

    public function datos($nombre, $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function informacion()
    {
        echo "Información del empleado";
        echo "<br>";

        echo "Nombre: " . $this->nombre . "<br>";
        echo "Sueldo: " . $this->sueldo . " €<br>";

        if ($this->sueldo > 6000) {
            echo $this->nombre . " debe pagar impuestos.";
        } else {
            echo $this->nombre . " no debe pagar impuestos.";
        }
    }
}

$empleado1 = new Empleado();

$empleado1->datos("Paola", 4500);

$empleado1->informacion();

?>