<?php

require_once "../Model/ToDoList.php";
require_once "../Helper/Input.php";
require_once "../BusinessLogic/ShowToDoList.php";
require_once "../View/ViewAddToDoList.php";
require_once "../View/ViewRemoveToDoList.php";

function viewShowToDoList()
{
    while (true) {
        showToDoList();
        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x  Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddToDoList();
        } elseif ($pilihan == "2") {
            viewRemoveToDoList();
        } elseif ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti";
        }
    }
    echo "Sampai Jumpa Lagi" . PHP_EOL;
}
