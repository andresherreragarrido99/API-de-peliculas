<?php

namespace App;

use App\Pelicula;
class ApiUtil
{
    public static function getpeliculas(): array
    {
        $peliculas = [];
        $client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'https://api.themoviedb.org/3/movie/top_rated?language=en-US&page=1', [
  'headers' => [
    'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI4Yjg3ODI0ZjgyZDNkYjU0YTZkOWQwNmZjZTMxNzhlNSIsIm5iZiI6MTc5MTg5NDA0NC4yMzYsInN1YiI6IjZhY2UyMjFjYWMzMjczZjRhMjZmNDFlYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.ZkJHxyz4QqCpaZo29OYEDS1zuZ0AOWwozKwaV_F8W5g',
    'accept' => 'application/json',
  ],
]);

//echo $response->getBody();
$datosJaon = $response->getBody()->getContents();
//datosJason es un string , vamos a adarle formato json
$datosFormateador = json_decode($datosJaon);
//es un objeto de la clase generica stdClass con un atributo
// por cada elemento que me devuelve el json de la api , a nosotros nos interesa 
// en este caso el atributo results que es n array de 20 peliculas .
// me quedo con el array . 
$arrayPeliculasJason = $datosFormateador->results;
//var_dump($arrayPeliculasJason);
//die();

foreach ($arrayPeliculasJason as $objetoPeli) {
  $pelicula = new Pelicula(
  
    $objetoPeli->title,
    $objetoPeli->overview,
   
    $objetoPeli->vote_average,
    $objetoPeli->poster_path

  );
  $peliculas[] = $pelicula;
}

        return $peliculas;
    }
}