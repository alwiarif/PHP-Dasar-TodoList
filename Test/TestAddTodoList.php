<?php

require_once "./Model/TodoList.php";
require_once "./BusinessLogic/AddTodoList.php";

addTodoList("Belajar");

var_dump($todoList);