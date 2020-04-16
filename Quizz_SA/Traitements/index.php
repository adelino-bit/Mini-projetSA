<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizzSA</title>
    <link rel="stylesheet" href="../public/css/quizz.css">
</head>
<body>
    <div class="header">
        <div class="logo"></div>
        <div class="header-text">Le plaisir de jouer</div>
    </div>
    <div class="contenir">
    <?php

    session_start();
        require_once("./fonctions.php");

        if (isset($_GET['page'])) {
            switch ($_GET['page']){
                case "accueil": 
                    require_once("../Pages/pageaccueil.php");

                break;

                case "jeux": 
                    require_once("../Pages/pagejoueur.php");

                break;
            }

        }else {

            if (isset($_GET['statut']) && $_GET['statut']==="logout") {
                deconnexion();
            }
            require_once("../Pages/connexion.php");
        }

        


    ?>
    </div>
</body>
</html>