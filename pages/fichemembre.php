<?php 
    $utilisateur=$_SESSION['utilisateur'];
    $id_membre= $utilisateur['id_membre'];
    $liste_objet=get_fiche_membre($id_membre);
?>
<main class="row couleurs reglage">
    <h2>Informations personnel</h2>
    <section>
        <article class="row">
            <table border="1 px" class="table table-striped table-hover custom-striped-table">
                <tr>
                    <th>Nom</th>
                    <td><?= $utilisateur['nom'];?></td>
                </tr>
                <tr>
                    <th>Date de naissance</th>
                    <td><?= $utilisateur['date_de_naissance'];?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= $utilisateur['email'];?></td>
                </tr>
                <tr>
                    <th>Ville</th>
                    <td><?= $utilisateur['ville'];?></td>
                </tr>
                <tr>
                    <th>Genre</th>
                    <td><?= $utilisateur['genre'];?></td>
                </tr>
            </table>
        </article>
    </section>
    <h2>Liste de ses objets</h2>
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
