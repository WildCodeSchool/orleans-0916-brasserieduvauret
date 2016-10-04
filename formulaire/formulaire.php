<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <link rel="stylesheet" href="formulaire.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <!---Formulaire de contact------>
    <h2 class="contact">Contactez-nous !</h2>
    <form>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="Nom" placeholder="Nom"> </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="Prenom" class="form-control" id="Prenom" placeholder="Prenom"> </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="email"> </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="Telephone" class="form-control" id="Telephone" placeholder="telephone"> </div>
                </div>
                <!--textarea-->
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="text-area">
                        <label for="text-area">Commentaire</label>
                        <textarea class="form-control" rows="9"></textarea>
                    </div>
                    <div class="bouton">
                        <button type="submit" class="btn btn-primary btn-lg ">Envoyer</button>
                    </div>
                </div>
                <!--fin textarea-->
            </div>
        </div>
    </form>
    <!---Fin Formulaire de contact------>
</body>

</html>