<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    // remove all session variables
    session_unset();

    //destroy the session
    session_destroy();
    echo "Session variables are cleared and session id destroyed.";

?>
    
</body>
</html>
