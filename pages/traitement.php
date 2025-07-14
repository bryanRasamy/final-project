<?php 
    require(".././inc/fonctions.php");
    session_start();

    $nom=$_GET['nom'];
    $email=$_GET['email'];
    $date_de_naissance=$_GET['date'];
    $genre=$_GET['genre'];
    $ville=$_GET['ville'];
    $mdp=$_GET['password'];

    inserer_membre($nom,$date_de_naissance,$genre,$email,$ville,$mdp);
    header('Location:login.php');
?>