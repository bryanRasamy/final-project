<?php 
    $categorie=get_categorie();
    if(isset($_GET['p'])){
        $liste_objet=$_SESSION['reponse'];
    }else{
        $liste_objet=get_liste_objet();
    }
    $utilisateur=$_SESSION['utilisateur'];
?>
<body class="couleurs">
    <header>
        <a href="modele.php?page=listeobjet&active=1" class="btn btn-outline-primary mt-4">
            <i class="bi bi-search"></i>
        </a>
    </header>
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
        <section class="position-absolute bottom-0 w-100 bg-dark bg-opacity-75 text-white p-3 z-2">
            <div class="row">
                <article class="col-3 col-sm-3 col-3"></article>
                <article class="col-6 col-sm-6 col-6 border shadow modif reglage">
                    <h3 class="text-center">Recherche</h3>
                    <form action="traitementrecherche.php" method="get" class="mt-4">
                        <article>
                            <p>Categorie:</p>
                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <select class="form-select" aria-label="Default select example" name="categorie">
                                        <option selected>Categorie</option>
                                        <?php foreach($categorie as $cat){?>
                                            <option value="<?php echo $cat['id_categorie'];?>"><?php echo $cat['nom_categorie'];?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </article>
                        <article>
                            <p>Nom de l'objet:</p>
                            <section class="input-group mb-3">
                                <article class="form-floating">
                                    <input type="text" class="form-control" name="nom" id="floatingInputGroup1" placeholder="Nom de l'objet">
                                    <label for="floatingInputGroup1">Nom de l'objet</label>
                                </artilce>
                            </section>
                        </article>
                        <article>
                            <section class="form-check">
                                <input type="checkbox" name="disponible" value="disponible">
                                <label class="form-check-label" for="flexCheckDefault">Disponible</label>
                            </section>
                            <section class="form-check">
                                <input type="checkbox" name="disponible" value="non_disponible">
                                <label class="form-check-label" for="flexCheckDefault">Non disponible</label>
                            </section>
                        </article>
                        <div class="d-grid gap-2 mt-4">
                            <input type="submit" value="Rechercher" id="valider" class="btn btn-success">
                        </div>
                    </form>
                </article>
            </div>
        </section>
    </main>
