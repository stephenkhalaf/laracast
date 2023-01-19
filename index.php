<?php

function dd($value){
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    die();
}

// dd($_SERVER['REQUEST_URI']);
$heading = "Home";
require "./views/index.view.php";

?>
