<?php
    include ('../config/dbconfig.php');
    include ('./session.php');

    session_unset();

    session_destroy();
    header("location: ../public/login.php");
    exit;


?>