<?php 
    $liste_objet=get_liste_objet();
    $utilisateur=$_SESSION['utilisateur'];
?>
<body class="couleurs">
    <main class="row couleurs reglage">    
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
