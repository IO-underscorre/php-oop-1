<?php

require_once __DIR__ . '/../Models/Movie.php';
require_once __DIR__ . '/../Models/Genre.php';

$movies = [
    new Movie('Jurassic World', ['Colin Trevorrow'], 'en'),
    new Movie('Alien: Romulus', ['Fede Álvarez'], 'en')
];

$movies[1]->setDescription('While scavenging the deep ends of a derelict space station, a group of young space colonizers come face to face with the most terrifying');
