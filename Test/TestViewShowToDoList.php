<?php

require_once "../View/ViewShowToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";

addToDoList("PHP Dasar");
addToDoList("PHP OOP");
addToDoList("PHP Composer");
addToDoList("PHP Database");
viewShowToDoList();
