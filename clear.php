<?php
    // Clear the value of the 'input' field in the cookie
    setcookie('input', '');

    // Redirect back to the calculator page
    header('Location: index.php');
?>