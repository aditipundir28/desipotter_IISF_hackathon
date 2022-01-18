<?
    session_start();
    if(!isset($_SESSION['amail']))
    {
        header('location: login/login.php');
    }
?>