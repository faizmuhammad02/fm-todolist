<?php
require_once "../BusinessLogic/AddToDoList.php";
require_once "../Helper/Input.php";
require_once "../Model/ToDoList.php";

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
