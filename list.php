<?php
// Imposta il tipo di contenuto come JSON per la risposta HTTP
header('Content-Type: application/json');

// Legge il file JSON dal disco
$fileContent = file_get_contents("todos.json");

// Stampa il contenuto del file JSON
echo $fileContent;