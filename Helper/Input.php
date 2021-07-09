<?php

function input(String $info) : String {

    echo "$info : ";

    $result = fgets(STDIN);

    return trim($result);

}