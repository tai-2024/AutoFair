<?php
/**
 * Example of a simple controller
 * It will call the model to get the data
 * and then decide which view to display (login form or welcome page)
 * 
 * @author: w.delamare
 * @date: Dec. 2023
 */

// do all necessary includes first
// __DIR__ allows you to use relative paths explicitly
require_once(__DIR__."/scripts/php/models/UserModel.php");

// Check if the user comes from the form...
// Check if the user comes from the form...
if (isset($_POST['login']) && isset($_POST['pwd'])) {
    // check if all fields have an input
    if (strlen($_POST['login']) > 0 && strlen($_POST['pwd']) > 0) {
        $userModel = new UserModel();
        // Call the model to check if the user exists
        $result = $userModel->check_login($_POST['login'], $_POST['pwd']);
        // If the search (in the db here) is successful
        if (isset($result['prenom'])) {
            // the controller can now redirect to the correct welcome webpage
            // making sure the firstname and lastname are registered throughout the **session**
            session_start();
            $_SESSION['prenom'] = $result['prenom'];
            $_SESSION['nom'] = $result['nom'];
            $_SESSION['logged_in'] = true;
        } else {
            // set the error message to be displayed in the view
            $something_to_say = "Invalid login and/or password.";  
        }
    } else {
        // set the error message to be displayed in the view
        $something_to_say = "Missing login and/or password";
    }
}

// If the user wants to logout, simply destroy the session
// (and hence redirect to the login form)
if (isset($_POST['logout'])) {
    session_start();
    session_destroy();
}

// Now, let's call the view.
// If something to say, the view will display it
// Otherwise, the view will simply display the login form

// before calling the view, just include useful view-related functions
require_once(__DIR__."/scripts/php/views/includes.php");

// and then call the correct view
// the form if not logged in, the welcome page if logged in
if (isset($_SESSION['prenom'])) {
        $id_role = $userModel->get_role($_POST['login']);     
        if ($id_role == 1) {
            require_once(__DIR__."/scripts/php/views/index.php");
        } elseif ($id_role == 2) {
            require_once(__DIR__."/scripts/php/views/admin_page.php");
        } else {
            require_once(__DIR__."/scripts/php/views/index.php");
            $something_to_say = "Invalid user class."; 
        }
} else {
    require_once(__DIR__."/scripts/php/views/login_page.php");
}
