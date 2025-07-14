<?php 
    require(".././inc/fonctions.php");
    session_start();

    $email=$_SESSION['email'];
    $pseudo=strstr($email,'@',true);

    inserer_membre($email,$pseudo);
    header('Location:login.php?a=1');
?>