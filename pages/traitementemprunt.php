<?php 
    require(".././inc/fonctions.php");
    session_start();

    $date_retour=$_GET['date'];
    $id_objet=$_GET['id_objet'];

    emprunter_objet($id_objet,$date_retour,$_SESSION['utilisateur']['id_membre']);
   
    header("Location:modele.php?page=listeobjet&b=1");
?>