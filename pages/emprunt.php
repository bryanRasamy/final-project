<div class="row">
    <article class="col-3 col-sm-3 col-3"></article>
    <article class="col-6 col-sm-6 col-6 border shadow modif reglage">
        <h3 class="text-center">Emprunt</h3>
        <form action="traitementemprunt.php" method="get" class="mt-4">
            <article>
                <p>Date de retour pour l'emprunt:</p>
                <section class="input-group mb-3">
                    <article class="form-floating">
                        <input type="date" class="form-control" name="date" id="floatingInputGroup1" placeholder="Nom de l'objet">
                        <label for="floatingInputGroup1">Date de retour</label>
                        <input type="hidden" name="id_objet" value="<?php echo $_GET['id_objet'];?>">
                    </artilce>
                </section>
            </article>
            <div class="d-grid gap-2 mt-4">
                <input type="submit" value="Emprunter" id="valider" class="btn btn-success">
            </div>
        </form>
    </article>
</div>