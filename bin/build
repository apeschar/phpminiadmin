#!/usr/bin/env php
<?php

$root = dirname(__FILE__) . '/..';

if(!is_dir($root . '/dist')) {
    mkdir($root . '/dist');
}

$out = '';
$out .= file_get_contents($root . '/src/phpminiadmin.php');

$scripts = file_get_contents($root . '/src/scripts.list');
$scripts = preg_split("|\s+|", $scripts);
$scripts = array_filter($scripts);

$out .= 'function scripts() {';
foreach($scripts as $file) {
    $out .= 'echo "<script>", ' . var_export(file_get_contents($root . '/src/' . $file), true) . ', "</script>";';
}
$out .= '}';

file_put_contents($root . '/dist/phpminiadmin.php', $out);
