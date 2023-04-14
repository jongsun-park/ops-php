<?php
declare(strict_types = 1);                                       // Use strict types
include '../src/bootstrap.php';                                  // Setup file

$data = [];

echo $twig->render('index.html', $data);                         // Render template