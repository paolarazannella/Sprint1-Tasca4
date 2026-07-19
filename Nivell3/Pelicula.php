<?php

class Pelicula
{
    private $nombre;
    private $duracion;
    private $director;

    public function __construct($nombre, $duracion, $director)
    {
        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->director = $director;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDuracion()
    {
        return $this->duracion;
    }

    public function getDirector()
    {
        return $this->director;
    }
}