<?php
// Autor - Abhijeet Singh <abhijeet3016@gmail.com>
// El nombre por defecto es Mundo
require('HolaMundo.php');

$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola {$nombre}\n";
?>
