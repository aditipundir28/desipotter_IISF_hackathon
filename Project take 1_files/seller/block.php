<?
    session_start();
    if(!isset($_SESSION['seller']))
    {
        header('location: ../login/login.php');
    }
?>