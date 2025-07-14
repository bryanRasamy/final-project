<?php 
    session_start();
    require(".././inc/fonctions.php");
    $_SESSION['email']=$_GET['email'];

    $email=$_SESSION['email'];
    $donnees=get_membre_connecte($email);

    if(isset($donnees)){
        $_SESSION['utilisateur']=$donnees;
        header('Location:accueil.php');
    }

    else if(!isset($donnees)){
        header("Location:traitement.php");
    }
?>