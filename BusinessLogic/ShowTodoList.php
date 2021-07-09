<?php

/**
 * Menampilkan todo di list
 */

function showTodoList(){

    global $todoList;

    echo "TODOLIST" .PHP_EOL;

    forEach($todoList as $number => $value) {

        echo "{$number}. $value" .PHP_EOL;

    }

}