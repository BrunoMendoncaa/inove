<?php
    session_start();
    sleep(2);
    session_destroy();

    header('location: ../index.php');
?>