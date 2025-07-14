<?php
    require("connection.php");

    function get_membre_connecte($email,$mdp){
        $sql="SELECT * FROM projet_final_membre WHERE email='%s' AND mdp='%s'";
        $sql=sprintf($sql,$email,$mdp);
        $resultat=mysqli_query(dbconnect(),$sql);
        $donnees=mysqli_fetch_assoc($resultat);
        return $donnees;
    }

    function inserer_membre($nom,$date,$genre,$email,$ville,$mdp){
        $requet="INSERT INTO projet_final_membre(nom,date_de_naissance,genre,email,ville,mdp,image_profile) VALUES ('%s','%s','%s','%s','%s','%s',NULL)";
        $requet=sprintf($requet,$nom,$date,$genre,$email,$ville,$mdp);
        mysqli_query(dbconnect(),$requet);
    }

    function get_liste_objet(){
        $rqt = "SELECT * FROM projet_final_objet JOIN projet_final_categorie_objet ON projet_final_objet.id_categorie=projet_final_categorie_objet.id_categorie JOIN projet_final_images_objet ON projet_final_objet.id_objet=projet_final_images_objet.id_objet JOIN projet_final_emprunt ON projet_final_objet.id_objet=projet_final_emprunt.id_objet";
        $resultat= mysqli_query(dbconnect(), $rqt);
        $demande=array();

        while($donnee=mysqli_fetch_assoc($resultat)){
            $demande[]=$donnee;
        }

        return $demande;
    }

    function get_categorie(){
        $rqt = "SELECT * FROM projet_final_categorie_objet ";
        $resultat= mysqli_query(dbconnect(), $rqt);
        $demande=array();

        while($donnee=mysqli_fetch_assoc($resultat)){
            $demande[]=$donnee;
        }

        return $demande;
    }
    
?>