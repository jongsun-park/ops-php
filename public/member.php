<?php
declare(strict_types = 1);                               // Use strict types
include '../src/bootstrap.php';                          // Setup file

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);// Validate id
if (!$id) {                                              // If no valid id
    include APP_ROOT . '/public/page-not-found.php';     // Page not found
}

$member = $cms->getMember()->get($id);                   // Get member data

$data['member']      = $member;                                  // Member data
$data['success']     = $_GET['success'] ?? '';                   // Success message if present

echo $twig->render('member.html', $data);                        // Render template