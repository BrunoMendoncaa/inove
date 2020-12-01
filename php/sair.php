<?php
    session_start();
    sleep(2);
    header('location: ../index.php');
    session_destroy();
?>