<!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>La Brasserie du Vauret</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="css/jumbo.css">
            <link rel="stylesheet" type="text/css" href="css/3ronds.css">
            <link rel="stylesheet" type="text/css" href="css/formulaire.css">
            <link rel="stylesheet" type="text/css" href="css/content.css">
            <link rel="stylesheet" type="text/css" href="css/stylenavbar.css">
            <link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet"> 
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
            <footer>
          
            </footer>
        </body>
    </html>