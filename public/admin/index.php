<?php
declare(strict_types = 1);                               // Use strict types
include '../../src/bootstrap.php';                       // Include setup file
is_admin($session->role);                                // Check if admin

$date = [];

echo $twig->render('admin/admin.html', $data);           // Render template