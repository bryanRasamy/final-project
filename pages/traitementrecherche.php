<?php 
    require(".././inc/fonctions.php");
    session_start();

    $categorie=$_GET['categorie'];
    $nom=$_GET['nom'];
    if(isset($_GET['disponible'])){
        $disponible=$_GET['disponible'];
    }else{
        $disponible=[];
    }
    

    $reponse=get_all_recherche($categorie,$nom,$disponible);
   
    $_SESSION['reponse']=$reponse;
    header("Location:modele.php?page=listeobjet&p=1");
?>