<?php
require_once __DIR__ . "/../BusinessLogic/AddToDoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/ToDoList.php";

function viewAddToDoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;
    $todo = input("Todo (x) untuk batal");
    if ($todo == "x") {
        echo "Batal menambahkan To DO" . PHP_EOL;
    } else {
        addToDoList($todo);
    }
}
