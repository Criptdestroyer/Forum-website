<?php
    session_start();
    session_unset("admin");
    header("Location: login.php");
?>