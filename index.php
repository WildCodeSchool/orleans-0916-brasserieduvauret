<!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>La Brasserie du Vauret</title>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="css/jumbo.css">
            <link rel="stylesheet" type="text/css" href="css/3ronds.css">
            <link rel="stylesheet" type="text/css" href="css/formulaire.css">
            <link rel="stylesheet" type="text/css" href="css/content.css">
            <link rel="stylesheet" type="text/css" href="css/stylenavbar.css">
            <link rel="stylesheet" type="text/css" href="css/stylenavbar.css">
              <link rel="stylesheet" type="text/css" href="css/fonts.css">
            <script src="js/bootstrap.min.js"></script>
        </head>
        <body>
            <div class="navbar1">
                <?php
                include 'pages/navbar.php';
                ?>
            </div>
            <?php
                include 'pages/jumbo.php';
                include 'pages/fil_actualite.php';
            ?>
            <div class="container-fluid row inter_bloc">


            </div>

            <?php
                include 'pages/map.php';
            ?>

             <div class="container-fluid row inter_bloc">


            </div>
            <?php
                include 'pages/formulaire.php';
            ?>
        </body>
    </html>