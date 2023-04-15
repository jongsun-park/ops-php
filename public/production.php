<?php
declare(strict_types = 1);                                           // Use strict types
include '../src/bootstrap.php';                                      // Setup file

$productions = $cms->getProduction()->getAll();

echo "<pre>";
var_dump($productions);
echo "</pre>";
