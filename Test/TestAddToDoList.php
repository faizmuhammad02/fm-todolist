<?php

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";

addToDoList("Belajar membuat Todo List");
addToDoList("Belajar PHP Composer");
addToDoList("Belajar PHP Database");

var_dump($todolist);
