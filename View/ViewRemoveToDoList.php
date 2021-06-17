<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveToDoList.php";

function viewRemoveToDoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batal)");
    if ($pilihan == "x") {
        echo "Batal menghapus TODO" . PHP_EOL;
    } else {
        $success = removeToDoList($pilihan);
        if ($success) {
            echo "Berhasil Menghapus Pilihan Nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal Menghapus Pilihan Nomor $pilihan" . PHP_EOL;
        }
    }
}
