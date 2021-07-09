<?php

 function addTodoList(string $todo) {

    global $todoList;

    $getNumber = sizeof($todoList) + 1;

    $todoList[$getNumber] = $todo;

}