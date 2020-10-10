<?php require_once('../database/dbconfig.php'); ?>

<?php
    session_start();

    $session=array();

    session_destroy();
    header("location: login.php");
    exit;

    if (isset($_SESSION['name'])){
            session_unset($_SESSION['username']);
            session_unset($_SESSION['userType']);
            session_unset($_SESSION['id']);
            $message = base64_encode(urlencode(("Logged Out Successfully")));
            header('Location:login.php?msg=' . $message);
            exit();
        }

?>