<?php

function removeTodoList(int $number): bool
{
    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    }
//hapus nya itu di timpa dengan nomor value yang di inginkan jadi misalkan hapus no 3 nah no 3 itu di timpa dengan no 4 dan no 4 di timpa no 5 
// nomor terakhirnya di hapus 
    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
        var_dump($todoList);
    }

    unset($todoList[sizeof($todoList)]);

    return true;
}