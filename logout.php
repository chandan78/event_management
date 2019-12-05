<?php
    session_start();
    $_SESSION['user_email']=="";
    session_destroy();
    header("Location:index.php");
?>