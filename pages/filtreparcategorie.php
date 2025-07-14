<?php 
    $categorie=get_categorie();
?>
<div class="row">
    <section class="col-3 col-sm-3 col-3"></section>
    <section class="col-6 col-sm-6 col-6 border shadow modif reglage">
        <h3 class="text-center">Filtre par categorie</h3>
        <form action="traitementfiltrecategorie.php" method="get" class="mt-4">
            <article>
                <p>categorie</p>
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

            <div class="d-grid gap-2 mt-4">
                <input type="submit" value="Filtrer" id="valider" class="btn btn-secondary">
            </div>
        </form>
</section>
</div>