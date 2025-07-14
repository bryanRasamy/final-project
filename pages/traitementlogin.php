<?php 
    session_start();
    require(".././inc/fonctions.php");
    $_SESSION['email']=$_GET['email'];
    $_SESSION['mdp']=$_GET['mdp'];

    $email=$_SESSION['email'];
    $mdp=$_SESSION['mdp'];
    $donnees=get_membre_connecte($email,$mdp);

    if(isset($donnees)){
        $_SESSION['utilisateur']=$donnees;
        header('Location:modele.php?page=listeobjet');
    }

    else if(!isset($donnees)){
        header("Location:login.php?a=1");
    }
?>