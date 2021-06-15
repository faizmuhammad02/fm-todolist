<?php

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/RemoveToDoList.php";

addToDoList("Belajar PHP Dasar");
addToDoList("Belajar PHP OOP");
addToDoList("Belajar PHP Database");
addToDoList("Belajar PHP Composer");

showToDoList();

removeToDoList(3); // Test Hapus urutan ketiga

showToDoList();

removeToDoList(3); // Test Hapus urutan ketiga

showToDoList();

$isSuccess = removeToDoList(3); // test error input

if ($isSuccess == false) {
    echo "Invalid Input";
}

showToDoList();
