<?php

function scripts() {
    $scripts = file_get_contents('src/scripts.list');
    $scripts = preg_split("|\s+|", $scripts);
    $scripts = array_filter($scripts);

    foreach($scripts as $file) {
        echo '<script>', @file_get_contents('src/' . $file) . '</script>';
    }
}

require 'src/phpminiadmin.php';
