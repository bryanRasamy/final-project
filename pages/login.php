<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href=".././assets/css/style.css">
    <link href=".././assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row head1 shadow">
            <h1>Site d'emprunt d'objet</h1>
        </div>
        <div class="row mt-5 esp1">
            <div class="col-3 col-sm-3 col-3 mt-5"></div>
            <div class="col-6 col-sm-6 col-6 border shadow modif mt-5">
                <h3 class="text-center">Veuillez vous connecter</h3>
                    <form action="traitementlogin.php" method="get" class="mt-4">
                        <?php if(!isset($_GET['a'])){ ?>
                            <label for="email" class="mt-4">Email:</label>
                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="floatingInputGroup1" placeholder="Email de l'utilisateur">
                                    <label for="floatingInputGroup1">Email</label>
                                </div>
                            </div>

                            <label for="email" class="mt-4">Mot de passe:</label>
                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="mdp" id="floatingInputGroup1" placeholder="Mot de passe de l'utilisateur">
                                    <label for="floatingInputGroup1">Mot de passe</label>
                                </div>
                            </div>
                        <?php }?>
                        <?php if(isset($_GET['a'])){ ?>
                            <label for="email">Email:</label>
                            <div class="input-group has-validation">
                                <div class="form-floating is-invalid">                    
                                    <div class="form-floating is-invalid">                 
                                        <input type="email" name="email" i class="form-control is-invalid" id="floatingInputGroup2"  placeholder="Email de l'utilisateur" required>
                                        <label for="floatingInputGroup2">Email</label>
                                    </div> 
                                </div>
                            </div>
                           
                            <label for="email" class="mt-4">Mot de passe:</label>
                            <div class="input-group has-validation">
                                <div class="form-floating is-invalid">                    
                                    <div class="form-floating is-invalid">                 
                                        <input type="text" name="mdp" id="pseudo" class="form-control is-invalid" id="floatingInputGroup2" placeholder="Entrez votre pseudo" required>
                                        <label for="floatingInputGroup2">mot de passe</label>
                                    </div>
                                    <div class="invalid-feedback">
                                        Email ou mot de passe non valide !!
                                    </div>  
                                </div>
                            </div>
                        <?php }?>
                        <div class="d-grid gap-2 mt-4">
                            <input type="submit" value="Connexion" id="valider" class="btn btn-primary">
                            <a href="inscription.php" class="link-danger mt-4 text-center">Pas encore de compte?</a>
                        </div>
                        
                </form>
            </div>
        </div>
    </div>
    <script src=".././assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>