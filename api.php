<?php

// Simula una lista di ToDo
$todos = [
    ['id' => 1, 'task' => 'Fare la spesa', 'completed' => false],
    ['id' => 2, 'task' => 'Studiare per l'esame', 'completed' => false],
    ['id' => 3, 'task' => 'Pagare le bollette', 'completed' => true],
];

header('Content-Type: application/json');

echo json_encode($todos);