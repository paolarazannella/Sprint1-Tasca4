<?php

require_once "Pelicula.php";

class cine
{
    private $nombre;
    private $poblacion;
    private $peliculas = [];

    public function __construct($nombre, $poblacion){
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
    }

    public function agregarPelicula($pelicula){
        $this->peliculas[] = $pelicula;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPoblacion()
    {
        return $this->poblacion;
    }

    public function getPeliculas()
    {
        return $this->peliculas;
    }

    public function getPeliculaMasLarga(){
        if (count($this->peliculas) == 0) {
            return null;
        }

        $peliculaMasLarga = $this->peliculas[0];

        foreach ($this->peliculas as $pelicula) {
            if ($pelicula->getDuracion() > $peliculaMasLarga->getDuracion()) {
                $peliculaMasLarga = $pelicula;
            }
        }

        return $peliculaMasLarga;
    }
}