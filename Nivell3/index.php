<?php
require_once "cine.php";


function buscarPeliculasPorDirector($cines, $directorBuscado)
{
    $peliculasEncontradas = [];

    foreach ($cines as $cine) {

        foreach ($cine->getPeliculas() as $pelicula) {

            if (
                strcasecmp($pelicula->getDirector(), $directorBuscado) == 0
            ) {
                $nombrePelicula = $pelicula->getNombre();

                if (!isset($peliculasEncontradas[$nombrePelicula])) {
                    $peliculasEncontradas[$nombrePelicula] = $pelicula;
                }
            }
        }
    }

    return $peliculasEncontradas;
}

$pelicula1 = new Pelicula(
    "Origen",
    148,
    "Christopher Nolan");

$pelicula2 = new Pelicula(
    "Interstellar",
    169,
    "Christopher Nolan");

$pelicula3 = new Pelicula(
    "Dunkerque",
    106,
    "Christopher Nolan");

$pelicula4 = new Pelicula(
    "Parásitos",
    132,
    "Bong Joon-ho");

$pelicula5 = new Pelicula(
    "El viaje de Chihiro",
    125,
    "Hayao Miyazaki");



$cine1 = new Cine(
    "Diagonal Mar",
    "Barcelona"
);

$cine2 = new Cine(
    "Los Fresnos",
    "Gijón"
);


$cine1->agregarPelicula($pelicula1);
$cine1->agregarPelicula($pelicula2);
$cine1->agregarPelicula($pelicula4);



$cine2->agregarPelicula($pelicula2);
$cine2->agregarPelicula($pelicula3);
$cine2->agregarPelicula($pelicula5);



$cines = [
    $cine1, $cine2];



foreach ($cines as $cine) {

    echo "CINE: " . $cine->getNombre() . "<br>";
    echo "POBLACIÓN: " . $cine->getPoblacion() . "<br>";
    echo "<br>";

    echo "PELÍCULAS:" . "<br>";

    foreach ($cine->getPeliculas() as $pelicula) {

        echo "Nombre: " . $pelicula->getNombre() . "<br>";
        echo "Duración: " . $pelicula->getDuracion() . " minutos" . "<br>";
        echo "Director/a: " . $pelicula->getDirector() . "<br>";
        echo "<br>";
    }

    $peliculaMasLarga = $cine->getpeliculaMasLarga();

    if ($peliculaMasLarga != null) {
        echo "PELÍCULA DE MAYOR DURACIÓN:" . "<br>";
        echo $peliculaMasLarga->getNombre();
        echo " - ";
        echo $peliculaMasLarga->getDuracion();
        echo " minutos";
        echo "<br>";
    }

}


$directorBuscado = "Christopher Nolan";

$resultados = buscarPeliculasPorDirector(
    $cines, $directorBuscado
);

echo "Peliculas de " . $directorBuscado . ":" . "<br>";

foreach ($resultados as $pelicula) {
    echo "- " . $pelicula->getNombre();
    echo " (" . $pelicula->getDuracion() . " minutos)";
    echo "<br>";
}