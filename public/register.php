<?php
declare(strict_types = 1);                               // Use strict types
use OPS\Validate\Validate;                           // Import Validate class

include '../src/bootstrap.php';                          // Setup file
$member = [];                                            // Initialize member array
$errors = [];                                            // Initialize errors array

function test($member, $errors, $twig){
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $data['member']     = $member;                               // Member data
    $data['errors']     = $errors;

    echo $twig->render('register.html', $data); 
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {              // If form was posted
    // Get form data
    // test($member, $errors, $twig);

    $member['user_name'] = $_POST['user_name'];            // Get username
    $member['email']     = $_POST['email'];               // Get email
    $member['password']  = $_POST['password'];            // Get password
    $confirm             = $_POST['confirm'];             // Get password confirmation

    // Validate form data
    $errors['user_name'] = Validate::isText($member['user_name'], 1, 254)
        ? '' : 'User name must be 1-254 characters';
    $errors['email']    = Validate::isEmail($member['email'])
        ? '' : 'Please enter a valid email';
    $errors['password'] = Validate::isPassword($member['password'])
        ? '' : 'Passwords must be at least 8 characters and have:<br> 
                A lowercase letter<br>An uppercase letter<br>A number 
                <br>And a special character';
    $errors['confirm']  = ($member['password'] = $confirm)
        ? '' : 'Passwords do not match';
    $invalid            = implode($errors);                  // Join error messages

    if (!$invalid) {                                         // If no errors
        $result = $cms->getMember()->create($member);        // Create member
        if ($result === false) {                             // If result is false
            $errors['email'] = 'Email address already used'; // Store a warning
        } else {                                             // Otherwise send to login
            redirect('login.php', ['success' => 'Thanks for joining! Please log in.']); 
        }
    }
}

// $data['navigation'] = $cms->getCategory()->getAll();         // All categories for nav
$data['member']     = $member;                               // Member data
$data['errors']     = $errors;                               // Error messages

echo $twig->render('register.html', $data);                  // Render template