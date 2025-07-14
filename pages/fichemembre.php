<?php 
    function get_fiche_membre($id_membre)
    {
        $rqt = "SELECT * FROM projet_final_objet JOIN  projet_final_categorie_objet ON projet_final_objet.id_categorie = projet_final_categorie_objet.id_categorie JOIN projet_final_images_objet ON projet_final_images_objet.id_objet= projet_final_objet.id_objet WHERE  projet_final_objet.id_membre ='%s' ORDER BY  projet_final_categorie_objet.nom_categorie, projet_final_objet.nom_objet;";
        $rqt= sprintf($rqt, $id_membre);
        $resultat= mysqli_query(dbconnect(), $rqt);
        $demande=array();

        while($donnee=mysqli_fetch_assoc($resultat)){
            $demande[]=$donnee;
        }

        return $demande;
    }
    
    $utilisateur=$_SESSION['utilisateur'];
    $id_membre= $utilisateur['id_membre'];
    $liste_objet=get_fiche_membre($id_membre);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<body class="couleurs">
    <main class="row couleurs reglage">
        <section>
            <article>
                <p></p>
            </article>
        </section>
        <?php foreach($liste_objet as $liste){?>
            <section class="col-sm-3 mb-3 mb-sm-0 mt-3 liste">
                <article class="card shadow" style="width: 18rem;">
                    <img src=".././assets/contenues/<?php echo $liste['nom_image'];?>" class="card-img-top">
                    <section class="card-body">
                        <article class="row">
                            <h5 class="card-title"><?php echo $liste['nom_objet']?></h5>
                            <p class="card-text"><?php echo $liste['nom_categorie']?></p>
                        </article>
                    </section>
                </article>
            </section>
        <?php }?>
    </main>
</body>
</html>