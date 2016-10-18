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
            <link rel="stylesheet" type="text/css" href="css/footer.css">
            <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
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
            ?>
            <div>
                <?php
                    include 'pages/3ronds.php';
                ?>
            </div>
            <?php
                include 'pages/fil_actualite.php';
            ?>
            <div class="container-fluid row inter_bloc2">

                <h1 class="slogan2">"Les bières sont non filtrées,</br>non pasteurisées et refermentées en bouteille"</h1>
            </div>

            <?php
                include 'pages/map.php';
            ?>

             <div class="container-fluid row inter_bloc3">
                <h1 class="slogan2">"Nous produisons des bières bio en flux détendu"</h1>

            </div>
            <?php
                include 'pages/formulaire.php';
            ?>
            <footer>
            <?php
                include 'pages/footer.php';
            ?>
            </footer>
        </body>
    </html>