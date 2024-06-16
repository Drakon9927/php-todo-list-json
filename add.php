<?php


$fileContent = file_get_contents("todos.json");
$todos = json_decode($fileContent, true); // Decodifica il JSON in un array PHP

// Controlla se i dati necessari sono presenti
if (isset($_POST["task"]) && isset($_POST["completed"])) {
  
  
    $newTodo = [
        "id" => count($todos) + 1, 
        "task" => $_POST["task"],
        "completed" => $_POST["completed"] === 'true' ? true : false
    ];

 
    $todos[] = $newTodo;

    // Riconverte l'array aggiornato in JSON
    $fileContent = json_encode($todos, JSON_PRETTY_PRINT);

    file_put_contents("todos.json", $fileContent);
}


header('Content-Type: application/json');


echo $fileContent;