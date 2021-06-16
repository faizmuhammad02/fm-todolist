<?php

require_once "../View/ViewAddToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";

addToDoList("Belajar PHP Dasar");
addToDoList("Belajar PHP OOP");
addToDoList("Belajar PHP Composer");
addToDoList("Belajar PHP Unit Test");

viewAddToDoList();

showToDoList();
