<?php
require_once('config.php');
$n = 7; // розмір масиву

// створення масиву
$array = array(1, 1);
for ($i = 2; $i < $N; $i++) {
  $array[$i] = $array[$i-2] + $array[$i-1];
}

$tpl_vars=array(
'n' => $a,
'arr' => $array,
);
$tpl_file='lab1-7.tmpl';
require_once('tpl_config.php');
?>