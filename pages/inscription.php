<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href=".././assets/css/style.css">
    <link href=".././assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row head1 shadow">
            <h1>Galerie</h1>
        </div>
        <div class="row">
            <div class="col-3 col-sm-3 col-3"></div>
            <div class="col-6 col-sm-6 col-6 border shadow modif">
                <h3 class="text-center">Créer votre compte dès maintenant</h3>
                <form action="traitement.php" method="get" class="mt-4">
                    <p>Nom:</p>
                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="nom" id="floatingInputGroup1" placeholder="Entrer votre nom">
                            <label for="floatingInputGroup1">Nom</label>
                        </div>
                    </div>
                    
                    <p>Pseudo:</p>
                    <?php if(!isset($_GET['p'])){ ?>
                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="pseudo" id="floatingInputGroup1" placeholder="Entrer votre pseudo">
                                <label for="floatingInputGroup1">Pseudo</label>
                            </div>
                        </div>
                    <?php }?>

                    <?php if(isset($_GET['p'])){ ?>
                        <div class="input-group has-validation">
                            <div class="form-floating is-invalid">                    
                                <div class="form-floating is-invalid">                 
                                    <input type="text" name="pseudo" id="pseudo" class="form-control is-invalid" id="floatingInputGroup2" placeholder="Entrez votre pseudo" required>
                                    <label for="floatingInputGroup2">Pseudo</label>
                                </div>
                                <div class="invalid-feedback">
                                    Le pseudo éxiste déjà
                                </div>  
                            </div>
                        </div>
                    <?php }?>

                    <p>Date de naissance:</p>
                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input type="date" class="form-control" name="date" id="floatingInputGroup1" placeholder="Entrer votre date de naissance">
                            <label for="floatingInputGroup1">Date de naissance</label>
                        </div>
                    </div>

                    <p>Email:</p>
                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input type="email" class="form-control" name="email" id="floatingInputGroup1" placeholder="Entrer votre Email">
                            <label for="floatingInputGroup1">Email</label>
                        </div>
                    </div>

                    <p>Mot de passe:</p>
                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password" id="floatingInputGroup1" placeholder="Entrer votre mot de passe">
                            <label for="floatingInputGroup1">Mot de passe</label>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <input type="submit" value="valider" id="valider" class="btn btn-secondary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src=".././assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>