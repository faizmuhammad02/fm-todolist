<?php

require_once "../View/ViewRemoveToDoList.php";
require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";

addToDoList("Belajar PHP Dasar");
addToDoList("Belajar PHP OOP");
addToDoList("Belajar PHP Composer");
addToDoList("Belajar PHP Unit Test");

showToDoList();

viewRemoveToDoList();

showToDoList();
