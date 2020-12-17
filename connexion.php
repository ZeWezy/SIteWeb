<?php
//faire le link a la base de données
$bdd = new PDO('sqlite:data.db'); //Connexion a la base de donnée (bdd)

//prog pr le connexion
if(isset($_POST['submit'])) {
    $pseudo = $_POST['username'];
    $mdp = $_POST['password'];

    $req = $bdd->query('SELECT * FROM user WHERE pseudo = ?');
    $req->execute(array($pseudo));
    $verif = $req->fetch();
    if($mdp === $verif['mdp']) {
        echo "SUPER";
    } else {
        echo "Noope";
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>FairyCube : Connexion</title>

    <!-- LINKS CSS -->
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<header>
    <div class="navbar">
        <ul class="navbar_ul left">
            <li class="navbar_li logo">FairyCube</li>
            <li class="navbar_li link"><a href="index.php">Accueil</a></li>
            <li class="navbar_li link"><a href="forum.html">Forum</a></li>
            <li class="navbar_li link"><a href="boutique.html">Boutique</a></li>
            <li class="navbar_li link"><a href="http://fairycube.fr:8846/">Dynmap</a></li>
        </ul>
        <ul class="navbar_ul right">
            <li class="navbar_li link"><a href="connexion.php">Connexion</a></li>
            <li class="navbar_li link"><a href="inscription.html">Inscription</a></li>
        </ul>
    </div>
</header>
<body>
    <div class="ImageC">
        <div class="Middle">
            <div class="CaseConnexion">
                <div class="MiddleWin">
                    <div class="WinConnexion">
                        <div class="TitreConnexion">
                            FairyCube
                        </div>
                        <div class="CaseFormulaireConnexion">
                            <div class="FC_Connexion">
                                Connexion
                            </div>
                            
                            <div class="login">
                                <form method="POST"> <!-- dans action mettre l'url de destination -->
                                    <input type="text" placeholder="Identifiant" name="username"> 
                                    <input type="password" placeholder="Mot de Passe" name="password"> 
                                    <p>
                                    <a href="" class="forgot">Mots de Passe oublié</a></p>
                                    <input type="submit" name="submit"> <!-- à finir-->
                                </form>
                            </div>
                            <div class="shadow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<footer class="footer_bloc">
    <div class="footer_place">
        <div class="footer_text">
            Suivez FairyCube sur les réseaux sociaux
        </div>
        <div class="footer_social">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-rss"></a>
        </div>
    </div>
</footer>
</html>