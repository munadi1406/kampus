<?php
include 'header.php';
    error_reporting(0);
    switch ($_GET['page']) {
    default:
        include "home.php";
        break;
    case "home";
        include 'home.php';
        break;
    case "profile";
        include 'profil.php';
        break;
    case "login";
        include "login.php";
        break;
}
include 'footer.php';
?>